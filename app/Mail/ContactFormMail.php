<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $service;
    public $messageContent;
    public $questions;
    public function __construct($name, $email, $phone, $subject, $service, $messageContent, $questions = [])
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->service = $service;
        $this->messageContent = $messageContent;
        $this->questions = $questions;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject ?? 'New Contact Form Submission from ' . $this->name . ' For Service: ' . $this->service,
            replyTo: $this->email
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form',
        );
    }
}
