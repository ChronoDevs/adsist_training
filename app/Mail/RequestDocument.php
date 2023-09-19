<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestDocument extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $mailBlade;
    /**
     * Create a new message instance.
     *
     * @param object $data
     * @param string $mailBlade
     * @return void
     */
    public function __construct($data, $mailBlade)
    {
        $this->data = $data;
        $this->mailBlade = $mailBlade;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.' . $this->mailBlade);
    }
}
