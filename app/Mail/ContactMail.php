<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
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
        $this->nombre = $data['nombre'];
        $this->apellido = $data['apellido'];
        $this->telefono = $data['telefono'];
        $this->email = $data['email'];
        $this->mensaje = $data['mensaje'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

//        return $this->view('view.name');
        return $this->view('mail.contacto')
            ->with([
                'nombre' => $this->nombre,
                'telefono' => $this->telefono,
                'apellido' => $this->apellido,
                'email' => $this->email,
                'mensaje' => $this->mensaje,
                ])
            ->replyto($this->email)
            ->subject('Mensaje de Contacto de la Pagina Web');
    }
}
