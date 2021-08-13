@extends('layouts.app')

@section('content')
<h1 style="cursor: pointer;">{{ $name }}様のご予約を承りました。</h1><br>
<h3><a href="{{ route('manage') }}">管理画面</a>よりご予約の変更・削除が可能ですので、ご利用くださいませ。</h3>
@endsection