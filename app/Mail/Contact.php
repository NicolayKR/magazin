<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $email, $surname, $message;
    protected $basket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $surname, $mess)
    {
        $this->name = $name;
        $this->email = $email;
        $this->surname = $surname;
        $this->message = $mess;
    }
    //Для корзины
    //Как параметр в конструктор просто передадим $order
    // public function __construct($name, $basket)
    // {
    //     $this->name = $name;
    //     $this->basket = $basket;
    // }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact_form',
         [  'name'=>$this->name,
            'email'=>$this->email,
            'surname'=>$this->surname,
            'mess'=>$this->message
        ]);
    }
}
