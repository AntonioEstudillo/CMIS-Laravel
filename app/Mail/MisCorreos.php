<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MisCorreos extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $message;

    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    public function build()
    {
        return $this->from('your@example.com') // Remitente
                    ->subject('Asunto del correo') // Asunto
                    ->view('mail.correos') // Vista del correo
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'message' => $this->message,
                    ]); // Datos a pasar a la vista del correo
    }
}
