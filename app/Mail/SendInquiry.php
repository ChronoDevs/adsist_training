<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the email content for the user.
     *
     * @return $this
     */
    public function buildForUser()
    {
        return $this->markdown('mail.inquiry_mail_user');
    }

    /**
    * Build the email content for the admin.
    *
    * @return $this
    */
    public function buildForAdmin()
    {
        return $this->markdown('mail.inquiry_mail_admin');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->buildForUser();
    }
}
