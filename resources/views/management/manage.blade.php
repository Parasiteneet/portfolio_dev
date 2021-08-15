@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $name }}様の予約管理画面</h1>
    <div>
    <a class="btn btn-outline-success text-success btn-lg" href="{{ route('edit') }}" role="button" >ご予約の変更はこちら</a>
    <a class="btn btn-outline-info text-info btn-lg" href="{{ route('mypage') }}" role="button" >ご予約の削除はこちら</a>
    </div>
</div>
@endsection