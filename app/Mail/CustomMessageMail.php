<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageText;

    public function __construct($messageText)
    {
        $this->messageText = $messageText;
    }

    public function build()
    {
        return $this->subject('New Sewing Order Request')
                    ->view('emails.custom');
    }
}
