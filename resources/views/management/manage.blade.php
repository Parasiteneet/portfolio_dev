@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ $name }}様のご予約管理画面</h3><br>
    <div>
        <label>ご予約の変更→</label>
            <a class="btn btn-outline-info text-info btn-lg" href="{{ route('edit') }}" role="button" >GO!</a><br>
        <br><label>ご予約の削除→</label>
            <a class="btn btn-outline-success text-success btn-lg" href="{{ route('delete') }}" role="button" >GO!</a><br>
    </div>
</div>  
@endsection