<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class recoverpass extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $code)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Recuperação de senha');
        $this->to($this->email);
        $this->from('suporte@indicaalguem.com.br', 'IndicaAlguem');

        return $this->view('mail.recovercoding', [
            'code' => $this->code
        ]);
    }
}
