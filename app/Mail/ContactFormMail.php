<?php
// app/Mail/ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageContent; // Renamed from $message to avoid conflict

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $message; // Store in messageContent
    }

    // app/Mail/ContactFormMail.php

public function build()
{
    return $this->from('fanclubteam01@gmail.com', 'Fan Club')  // Brevo-verified address
               ->to('fanclubteam01@gmail.com')                     // Your personal inbox
               ->replyTo($this->email)                        // User's real email (e.g., user@gmail.com)
               ->subject("New Contact: {$this->name}")
               ->view('emails.contact-form');
}
}