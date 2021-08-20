@extends('layouts.app')

@section('content')
<div>
  <label>会員登録せずにご予約→</label>
  <a class="btn btn-outline-info text-info btn-lg rounded-circle" href="{{ route('input') }}" role="button" >GO!</a><br>
  <br><label>会員登録してご予約→</label>
  <a class="btn btn-outline-success text-success btn-lg rounded-circle" href="{{ route('register') }}" role="button" >GO!</a><br>
  <br><label>ログインはこちら→</label>
  <a class="btn btn-outline-warning text-warning btn-lg rounded-circle" href="{{ route('login') }}" role="button" >GO!</a><br>
</div>
<div class='mt-4'>
    <h5 class="pt-2"><em>ご予約の確認や変更はご登録後にご使用できます。</em></h5>
</div>
  @endsection