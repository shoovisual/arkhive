<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_name' => 'required|string|max:255',
        ]);

        try {
            // Process questions and answers
            $questions = $request->service_questions ?? [];
            $answers = [];
            
            foreach ($questions as $index => $question) {
                $answers[] = $request->input('question_' . $index);
            }

            // Send email
            Mail::to('clientservices@arkhive.africa')
                ->send(new ContactFormMail(
                    $validatedData['name'],
                    $validatedData['email'],
                    $validatedData['phone'],
                    'Service Inquiry',
                    $validatedData['service_name'],
                    $request->message ?? null,
                    $questions,
                    $answers
                ));

            return back()->with('success', 'Thank you for your message. We will get back to you soon!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}
