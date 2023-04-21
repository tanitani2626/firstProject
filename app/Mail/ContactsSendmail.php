<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactsSendmail extends Mailable {
use Queueable, SerializesModels;

// プロパティを定義
private $name;
private $email;
private $phone_number;
private $title;
private $body;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct( $inputs )
  {
    // コンストラクタでプロパティに値を格納
    $this->name = $inputs['name'];
    $this->email = $inputs['email'];
    $this->phone_number = $inputs['phone_number'];
    $this->title = $inputs['title'];
    $this->body = $inputs['body'];
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    // メールの設定
    return $this
            ->from('tanigch56@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'title' => $this->title,
            'body' => $this->body,
            ]);
  }
}
