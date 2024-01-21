<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    // public $request;
    public $data;

    public function __construct($data)
    {
        $this->subject($data['subject']);
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */

    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'New Message',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail',
        );
    }    
    
    // public function build()
    // {
    //     return $this->subject($this->subjectnjir);
    // }

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
