<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceFormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        try {
            // Get the questions from the service
            $questions = [];
            $answers = [];
            
            if ($request->has('service_questions')) {
                foreach ($request->service_questions as $index => $question) {
                    $questions[] = $question;
                    $answers[] = $request->input('question_' . $index);
                }
            }

            // Validate mail configuration
            $mailConfig = [
                'host' => config('mail.mailers.smtp.host'),
                'port' => config('mail.mailers.smtp.port'),
                'username' => config('mail.mailers.smtp.username'),
                'password' => config('mail.mailers.smtp.password'),
                'encryption' => config('mail.mailers.smtp.encryption'),
                'from_address' => config('mail.from.address'),
            ];

            foreach ($mailConfig as $key => $value) {
                if (empty($value)) {
                    \Log::error("Mail configuration error: {$key} is not set");
                    return back()->with('error', 'Mail configuration error. Please contact the administrator.');
                }
            }

            $toEmail = $mailConfig['from_address'];

            try {
                \Log::info('Attempting to send email with the following data:', [
                    'to' => $toEmail,
                    'from' => $request->email,
                    'name' => $request->name,
                    'service' => $request->service_name,
                    'questions_count' => count($questions),
                    'answers_count' => count($answers)
                ]);

                // Send email
                $mail = new ContactFormMail(
                    $request->name,
                    $request->email,
                    $request->phone,
                    'Service Inquiry',
                    $request->service_name,
                    $request->message ?? null,
                    $questions,
                    $answers
                );

                Mail::to($toEmail)->send($mail);

                return back()->with('success', 'Thank you for your inquiry. We will get back to you soon!');
            } catch (\Exception $mailException) {
                \Log::error('Mail sending failed: ' . $mailException->getMessage());
                \Log::error('Stack trace: ' . $mailException->getTraceAsString());
                return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
            }

        } catch (\Exception $e) {
            \Log::error('Form processing error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->with('error', 'Sorry, there was an error processing your request. Please try again later.');
        }
    }
}
