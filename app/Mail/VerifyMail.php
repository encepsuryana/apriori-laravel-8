<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyMail extends Mailable
{
  use Queueable, SerializesModels;
  
  public $akun;
  
  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($akun)
  {
    $this->akun = $akun;
  }
  

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this->from('hidroponikapps@gmail.com', 'Dwiki Shop')->subject('Verifikasi Akun')->markdown('emails.verifyAkun')->with('akun', $this->akun);
  }
}