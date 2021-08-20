@extends('layouts.app')

@section('content')
<label>会員登録せずにご予約→</label>
<a class="btn btn-outline-info text-info btn-lg" href="/without" role="button" >GO!</a><br>
<br><label>会員登録してご予約→</label>
<a class="btn btn-outline-success text-success btn-lg" href="{{ route('register') }}" role="button" >GO!</a><br>
  @endsection