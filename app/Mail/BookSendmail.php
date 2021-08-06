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
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->to('wumabeatboxer@gmail.com')
        ->from('wumabeatboxer@gmail.com')
        ->subject('予約完了メール')
        ->view('book.mail')
        ->with([
            'name' => $this->name,
            'tel' => $this->tel,
            'date' => $this->date,
            'time' => $this->time,
        ]);
    }
}
