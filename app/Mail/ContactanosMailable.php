<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Información de contacto"; //este es el mensaje que va en asunto

    public $contacto = "Esta es la información de contacto";




    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto =$contacto;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactanos');
    }
}
