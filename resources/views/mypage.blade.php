@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:10%;">
    <div class="jumbotron" style="background-color:white;">
        <h2>ようこそ！！{{ $name }}様</h2>
        <p class="lead">ご使用のメールアドレス:{{ $mail }}</p>
        <p class="lead">マイページでは、ご予約されているお日にちを確認できます。</p>
        <p>ご予約中のお日にち：{{ $booking->date }}</p>
        <hr class="my-4">
 <a class="btn btn-outline-success text-success btn-lg" href="{{ route('reserve') }}" role="button" >ご予約はこちら</a>
    </div>
</div>
@endsection
