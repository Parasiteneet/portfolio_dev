@extends('layouts.app')

@section('content')

  <div class="reservation-form">
    <form>
      <div class="form-groupe">
        <label for="booking-name">お名前</label>
          <input type="text" class="form-control" id="booking-name" aria-describedby="input_name" placeholder="お名前を入力して下さい">
      </div>
      <div class="form-groupe">
        <label for="booking-tel">お電話番号</label>
          <input type="tel" class="form-control" id="booking-tel" aria-describedby="input_tel" placeholder="お電話番号">
      </div>
      <div class="form-groupe">
        <label for="booking-day">ご予約日</label>
          <input type="date" class="form-control" id="booking-day" aria-describedby="input_day" placeholder="ご予約をご希望の日にち" value="<?php echo date('Y-m-d'); ?>">
      </div>
      <div class="form-groupe">
          <label for="scheduled-time">予定時刻を入力（30分間隔での入力をお願い致します。）</label>
          <input type="time" step="900" class="form-control" id="scheduled-time"> 
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