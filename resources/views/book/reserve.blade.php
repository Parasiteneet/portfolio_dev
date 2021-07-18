@extends('layouts.app')

@section('content')

  <div class="reservation-form">
    <form method="POST" action="/book/confirm">
      <div class="form-groupe">
        <label for="booking-name">お名前</label>
          <input type="text" class="form-control" id="booking-name" aria-describedby="input_name" placeholder="お名前を入力して下さい">
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-tel">お電話番号</label>
          <input type="tel" class="form-control" id="booking-tel" aria-describedby="input_tel" placeholder="お電話番号">
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-day">ご予約日</label>
          <input type="date" class="form-control" id="booking-day" aria-describedby="input_day" placeholder="ご予約をご希望の日にち" value="<?php echo date('Y-m-d'); ?>">
      </div>
      <div class="form-groupe mt-3">
          <label for="scheduled-time">ご予約時間</label>
          <input type="time" step="900" class="form-control" id="scheduled-time"> 
      </div>
      <div class="form-groupe mt-3">
          <label for="form-comment">コメント</label>
          <input type="textarea" class="form-control" id="form-comment" placeholder="その他、先に伝えたいことなどございましたら、こちらでご記入下さい。" >
      </div>
      <!-- 予約フォームで使うテーブルの構成
      ・name input 
      ・TEL input 
      ・日時 input
      ・予約時のコメント textarea
      -->

    </form>
  </div>
@endsection