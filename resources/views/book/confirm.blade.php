@extends('layouts.app')

@section('content')
<div class="reservation-form">
    <form method="POST" action="{{ route('thanks') }}">
    @csrf
      <div class="form-groupe">
        <label for="booking-name">お名前：</label>
        {{ $inputs['booking-name'] }}
        <input name="booking-name" value="{{ $inputs['booking-name'] }}" type="hidden" class="form-control" id="booking-name" aria-describedby="input_name">
      </div>
      <div class="form-groupe">
        <label>お電話番号：</label>
        {{ $inputs['booking-tel'] }}
        <input name="booking-tel" value="{{ $inputs['booking-tel'] }}" type="hidden" class="form-control" aria-describedby="input_tel">
      </div>
      <div class="form-groupe">
        <label>ご予約日：</label>
        {{ $inputs['booking-date'] }}
        <input name="booking-date" value="{{ $inputs['booking-date'] }}" type="hidden" class="form-control" aria-describedby="input_date">
      </div>
      <div class="form-groupe">
        <label>ご予約時間：</label>
        {{ $inputs['scheduled-time'] }}
        <input name="scheduled-time" value="{{ $inputs['scheduled-time'] }}" type="hidden" class="form-control" aria-describedby="scheduled-time">
      </div>
      @if (isset($inputs['form-comment']))
        <div class="form-groupe">
          <label>お問い合わせ：</label>
          {{ $inputs['form-comment'] }}
          <input name="form-comment" value="{{ $inputs['form-comment'] }}" type="hidden" class="form-control" aria-describedby="input_name">
        </div>
      @endif
  </div>
  <button type="submit" class="btn btn-success mt-4" value="submit">予約する</button>
  <button type="submit" class="btn btn-info text-white mt-4" value="modifying"> 入力内容の変更</button>
</form>
@endsection