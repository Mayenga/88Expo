<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $participant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nanenane2024@kilimo.go.tz', 'Nanenane Agricultural International Expo, 2024')  // Set the from address and name
        ->subject('Welcome to Nanenane Agricultural International Expo 2024!')  // Set the subject
        ->view('emails.welcome')  // Define the view for the email
        ->with([
            'name' => $this->participant->name,
        ]);  // Pass data to the view
    }
}
