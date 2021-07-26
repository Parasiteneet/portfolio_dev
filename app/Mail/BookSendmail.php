<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookSendmail extends Mailable
{
    use Queueable, SerializesModels;

//publicではなくprivateで設定する理由は、このクラスの中だけで利用するようにしないと情報が漏洩してしまう。特に電話番号とかマジでダメ。

    private $name;
    private $tel;
    private $date;
    private $time;
    private $body;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['booking-name'];
        $this->tel = $inputs['booking-tel'];
        $this->date = $inputs['booking-date'];
        $this->time = $inputs['scheduled-time'];
        $this->body = $inputs['form-comment'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('wumabeatboxer@gmail.com')
        ->subject('予約完了メール')
        ->view('email.mail');
    }
}
