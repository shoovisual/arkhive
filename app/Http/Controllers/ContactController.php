<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
            'subject' => 'required|string|max:255',
            'service' => 'required|string|exists:services,title',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Send email
            Mail::to('shoovisual@gmail.com')
                ->send(new ContactFormMail(
                    $validatedData['name'],
                    $validatedData['email'],
                    'Service Inquiry from ' . $validatedData['name'],
                    $validatedData['subject'],
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
