<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data,$destinatario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$destinatario)
    {
        $this->data=$data;
        $this->destinatario=$destinatario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->destinatario=='C'){
            return $this->from('contato@smartdriving.com.br','Smart Driving Labs')->subject('Obrigado pelo seu contato!')->to($this->data['email'],$this->data['nome'])
            ->view('email_client_template')->with('data',$this->data);
        } else if ($this->destinatario=='S'){
            return $this->from('contato@smartdriving.com.br','Site Smart Driving Labs')->subject('Novo contato via site')->to('contato@smartdriving.com.br','Smart Driving Labs')
            ->view('dynamic_email_template')->with('data',$this->data);

        }
    }
}

 

