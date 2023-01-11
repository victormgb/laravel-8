<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $message)
    {
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::debug($this->name);
        Log::debug($this->email);

        return $this->subject('Contact Request')->view('mails.contact-request')->with([
            'name' => $this->name,
            'email' => $this->email,
            'message'=> $this->message
        ]);
    }
}
