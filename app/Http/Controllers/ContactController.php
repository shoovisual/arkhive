<?php

namespace App\Http\Controllers;

use Newsletter;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Rules\reCaptcha;

class ContactController extends Controller
{
    public function index()
    {
        $services = \App\Models\Service::all();
        return view('contact.index', compact('services'));
    }



    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:13|regex:/^\+?[0-9]{9,13}$/|',
            'service' => 'required|string|exists:services,title',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => ['required', new reCaptcha()],
            'subscribe' => 'nullable|boolean', // <-- new checkbox validation
        ]);

        try {
            // Send email
            Mail::to('clientservices@arkhive.africa')
                ->send(new ContactFormMail(
                    $validatedData['name'],
                    $validatedData['email'],
                    $validatedData['phone'],
                    $validatedData['subject'] ?? null,
                    $validatedData['service'],
                    $validatedData['message']
                ));

            // If user checked "Subscribe to newsletter"
            if ($request->has('subscribe') && $request->subscribe == 1) {
                $this->handleNewsletterSubscription($validatedData);
            }

            return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
        } catch (\Exception $e) {
            Log::error(['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }

    /**
     * Handle newsletter subscription for contact form submissions
     *
     * @param array $validatedData
     * @return void
     */
    private function handleNewsletterSubscription(array $validatedData): void
    {
        try {
            $email = $validatedData['email'];
            $name = $validatedData['name'];
            $phone = $validatedData['phone'] ?? '';
            $services = $validatedData['service'] ?? '';

            // Check if already subscribed to avoid duplicate subscriptions
            if (!Newsletter::isSubscribed($email)) {
                Newsletter::subscribeOrUpdate($email, [
                    'FNAME' => $name,
                    'PHONE' => $phone,
                    'INDUSTRY' => $services,
                ]);

                Log::info('Newsletter subscription successful', [
                    'email' => $email,
                    'name' => $name,
                ]);
            } else {
                Log::info('User already subscribed to newsletter', [
                    'email' => $email,
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Newsletter subscription failed', [
                'email' => $validatedData['email'] ?? 'unknown',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'mailchimp_api_key_set' => !empty(config('newsletter.apiKey')),
                'mailchimp_list_id_set' => !empty(config('newsletter.lists.subscribers.id')),
            ]);
            // Don't block form submission if Mailchimp fails
            // The form should still work even if newsletter subscription fails
        }
    }

}
