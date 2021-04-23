@extends('layouts.app')

@section('content')
<div class="container">
    <h1>This is mypage</h1>

    <h2>ユーザ名:{{ $name }}</h2>
    <h2>ご使用のメールアドレス:{{ $mail }}</h2>


</div>
@endsection