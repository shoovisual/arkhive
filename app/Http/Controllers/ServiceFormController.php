<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Rules\reCaptcha;
use App\Rules\NotSpamName;
use App\Rules\NotSpamEmail;
use Newsletter;


class ServiceFormController extends Controller
{
    public function submit(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255', new NotSpamName()],
        'email' => ['required', 'email', 'max:255', new NotSpamEmail()],
        'phone' => 'required|string|max:20',
        'service_name' => 'required|string|max:255',
        'g-recaptcha-response' => ['required', new reCaptcha()],
        'subscribe' => 'nullable|boolean', // Newsletter subscription checkbox
    ]);

    try {
            // Retrieve questions only
            $questions = $request->service_questions ?? [];

            // Log the data being sent
            \Log::info('Service form submission data:', [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'service' => $validatedData['service_name'],
                'questions_count' => count($questions),
                'questions' => $questions,
            ]);

            // Send email (with questions only)
            Mail::to('clientservices@arkhive.africa')
                ->send(new ContactFormMail(
                    $validatedData['name'],
                    $validatedData['email'],
                    $validatedData['phone'],
                    'Service Inquiry from ' . $validatedData['name'],
                    $validatedData['service_name'],
                    $request->message ?? null,
                    $questions
                ));

            \Log::info('Service form email sent successfully');
            
            // Handle newsletter subscription if requested
            if ($request->has('subscribe') && $request->subscribe == 1) {
                $this->handleNewsletterSubscription($validatedData);
            }
            
            return back()->with('success', 'Thank you for your message. We will get back to you soon!');
        } catch (\Exception $e) {
            \Log::error('Service form submission error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }

    /**
     * Handle newsletter subscription for service form
     */
    private function handleNewsletterSubscription($data)
    {
        try {
            $email = $data['email'];
            $firstName = $data['first_name'] ?? '';
            $lastName = $data['last_name'] ?? '';
            
            // Check if already subscribed
            if (Newsletter::isSubscribed($email)) {
                \Log::info("Newsletter: Email {$email} is already subscribed");
                return;
            }
            
            // Subscribe to newsletter
            $result = Newsletter::subscribe($email, [
                'FNAME' => $firstName,
                'LNAME' => $lastName
            ]);
            
            if ($result) {
                \Log::info("Newsletter: Successfully subscribed {$email}");
            } else {
                \Log::warning("Newsletter: Failed to subscribe {$email}");
            }
            
        } catch (\Exception $e) {
            \Log::error('Newsletter subscription failed: ' . $e->getMessage());
            // Don't throw exception - newsletter failure shouldn't block form submission
        }
    }

}
