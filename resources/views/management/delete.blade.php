@extends('layouts.app')
@section('content')
<div class="reservation-form">
    <form method="POST" action="{{ route('erase') }}">
    @csrf
      <div class="form-groupe">
        <label for="booking-name">お名前</label>
          <input name="booking-name" value="{{ $rsv->name }}" type="text" class="form-control" id="booking-name" aria-describedby="input_name" placeholder="お名前を入力して下さい">
      @if ($errors->has('booking-name'))
        <div class="alert alert-danger">
          <p class="error-message">{{ $errors->first('booking-name') }}</p>
        </div>
      @endif
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-tel">お電話番号</label>
          <input name="booking-tel" type="tel" value="{{ $rsv->tel }}" class="form-control" id="booking-tel" aria-describedby="input_tel" placeholder="お電話番号">
      @if ($errors->has('booking-tel'))
        <div class="alert alert-danger">
          <p class="error-message">{{ $errors->first('booking-tel') }}</p>
        </div>
      @endif
      </div>
      <div class="form-groupe mt-3">
        <label for="booking-date">ご予約日</label>
          <input name="booking-date" type="date" value="{{ $rsv->date }}" class="form-control" id="booking-date" aria-describedby="input_day" placeholder="ご予約をご希望の日にち" value="<?php echo date('Y-m-d'); ?>">
      @if ($errors->has('booking-date'))
        <div class="alert alert-danger">
          <p class="error-message">{{ $errors->first('booking-date') }}</p>
        </div>
      @endif
      </div>
      <div class="form-groupe mt-3">
          <label for="scheduled-time">ご予約時間（30分間隔）</label>
          <input name="scheduled-time" type="time" value="17:30" step="1800" class="form-control" id="scheduled-time"> 
      @if ($errors->has('scheduled-time'))
        <div class="alert alert-danger">
          <p class="error-message">{{ $errors->first('scheduled-time') }}</p>
        </div>
      @endif
      </div>
      <button type="submit" class="btn btn-outline-info text-info btn-lg mt-4"> ご予約を削除する </button>
    </form>
  </div>
@endsection