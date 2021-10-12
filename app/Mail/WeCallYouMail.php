<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class WeCallYouMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contácto | Farmaconsulting')
                    ->markdown('emails.we-call-you')
                    ->with('contact', $this->contact);
    }
}
