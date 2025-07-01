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
        Mail::to('shoovisual@gmail.com')
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
        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    } catch (\Exception $e) {
        \Log::error('Service form submission error: ' . $e->getMessage());
        \Log::error('Stack trace: ' . $e->getTraceAsString());
        return back()
            ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
            ->withInput();
    }
}

}
