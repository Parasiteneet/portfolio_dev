@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:10%;">
    <div class="jumbotron" style="background-color:white;">
        <h3>{{ $name }}様、ようこそ！</h3><br>
        <p class="lead">ご使用のメールアドレス：</p>
        <p class="lead pl-2">{{ $mail }}</p>
        @isset($rsv->date)
        @if($rsv->date > $today) 
            <p class="lead">ご予約中のお日にち：{{ $rsv->date??"予約はございません" }}</p>
        @endif
        @endisset
            <hr class="my-4">
                <div>
                    <label>新規のご予約→</label>
                        <a class="btn btn-outline-info text-info btn-lg" href="{{ route('reserve') }}" role="button" >GO!</a><br>
                    <br><label>ご予約の管理→</label>
                        <a class="btn btn-outline-success text-success btn-lg" href="{{ route('manage') }}" role="button" >GO!</a><br>
                </div>
    </div>
</div>
@endsection
