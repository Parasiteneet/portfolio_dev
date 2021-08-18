@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:10%;">
    <div class="jumbotron" style="background-color:white;">
        <h3>{{ $name }}様、ようこそ！</h3><br>
        <p class="lead">ご使用のメールアドレス</p>
        <p class="lead">{{ $mail }}</p>
        @isset($rsv->date)
        @if($rsv->date > $today) 
        <p class="lead">ご予約中のお日にち：{{ $rsv->date??"予約はございません" }}</p>
        @endif
        @endisset
        <hr class="my-4">
 <a class="btn btn-outline-success text-success btn-lg" href="{{ route('reserve') }}" role="button" >ご予約はこちらから</a><br>
 <a class="btn btn-outline-info text-info btn-lg mt-3" href="{{ route('edit') }}" role="button" >ご予約の変更はこちら</a>
    </div>
</div>
@endsection
