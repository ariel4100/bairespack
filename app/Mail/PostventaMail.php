<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostventaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //dd($data);
        $this->nombre = $data['name'];
        $this->telefono = $data['phone'];
        $this->empresa = $data['empresa'];
        $this->email = $data['email'];
        $this->mensaje = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.postventa')->with([
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'empresa' => $this->empresa,
            'email' => $this->email,
            'mensaje' => $this->mensaje,
        ]);
    }
}
