@extends('layouts.app')

@section('content')

  <div class="reservation-form">
    <form method="POST" action="book/confirm">
    @csrf
      <div class="form-groupe">
        <label for="booking-name">お名前</label>
          <input type="text" value="{{ old('booking-name') }}" class="form-control" id="booking-name" aria-describedby="input_name" placeholder="お名前を入力して下さい">
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-tel">お電話番号</label>
          <input type="tel" value="{{ old('booking-tel') }}" class="form-control" id="booking-tel" aria-describedby="input_tel" placeholder="お電話番号">
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-date">ご予約日</label>
          <input type="date" value="{{ old('booking-date') }}" class="form-control" id="booking-date" aria-describedby="input_day" placeholder="ご予約をご希望の日にち" value="<?php echo date('Y-m-d'); ?>">
      </div>
      <div class="form-groupe mt-3">
          <label for="scheduled-time">ご予約時間</label>
          <input type="time" value="{{ old('booking-time') }}" step="900" class="form-control" id="scheduled-time"> 
      </div>
      <div class="form-groupe mt-3">
          <label for="form-comment">コメント</label>
          <input type="textarea" value="{{ old('form-comment') }}" class="form-control" id="form-comment" placeholder="伝えたいことなどございましたら、ご記入下さい。" >
      </div>
      <button class="btn btn-success mt-4"> 入力内容の確認 </button>
    </form>
  </div>
@endsection