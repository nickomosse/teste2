<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class teste extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $email)
    {
        $this->user->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Recuperação de senha');
        $this->to($this->user->email);
        $this->from('envio@indicaalguem.com.br', 'IndicaAlguem');
        return $this->view('mail.teste', [
            'user' => $this->user
        ]);
    }
}
