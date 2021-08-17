@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $name }}様の予約管理画面</h3><br>
    <div>
    <a class="btn btn-outline-success text-success btn-lg" href="{{ route('edit') }}" role="button" >ご予約の変更はこちら</a><br>
    <br><a class="btn btn-outline-info text-info btn-lg" href="{{ route('delete') }}" role="button" >ご予約の削除はこちら</a>
    </div>
</div>
@endsection