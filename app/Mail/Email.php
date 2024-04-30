<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    // public $emailData; // Will store data
    public $customer_email;
    public $customer_name;
    public $subject;
    public $headers;
    public $messageBody;
    public $company_email;

    /**
     * Create a new message instance.
     */
    public function __construct($company_email, $customer_email, $customer_name, $headers, $subject, $messageBody)
    {
        // This, references the class(Email), we then get access to the pub prop of emailData
        // storing incoming data, to the pub prop(emailData) for global class use
        // on each new instance of Email class obj. it now expects $data;
        $this->customer_email = $customer_email;
        $this->customer_name = $customer_name;
        $this->company_email = $company_email;
        $this->subject = $subject;
        $this->headers = $headers;
        $this->messageBody = $messageBody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email',
        );
    }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.sample', // Blade view for email content
    //     );
    // }

    public function build()
    {

        return $this
            ->from('ofroot.technology@gmail.com', 'Customer Service')
            ->subject($this->subject)
            ->withHeaders($this->headers)
            ->view('email.onlinebooking')->with(
                [
                    'customer_email' => $this->customer_email,
                    'customer_name'  => $this->customer_name,
                    'company_email' => $this->company_email,
                    'messageBody' => $this->messageBody
                ]
            );
    }



    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
