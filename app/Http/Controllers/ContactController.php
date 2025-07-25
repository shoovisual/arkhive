<?php

namespace App\Http\Controllers;

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
            'g-recaptcha-response' => ['required', new reCaptcha()]
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

            return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
        } catch (\Exception $e) {
            Log::error(['message'=>$e->getMessage(),'trace'=>$e->getTraceAsString()]);
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}
