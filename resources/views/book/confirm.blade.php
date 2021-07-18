@extends('layouts.app')

@section('content')
<form method="POST" action="">
    @csrf

    <label>メールアドレス</label>
    <input
        name="email"
        value=""
        type="hidden">

    <label>タイトル</label>
    <input
        name="title"
        value=""
        type="hidden">


    <label>お問い合わせ内容</label>
    <input
        name="body"
        value=""
        type="hidden">

    <button type="submit" name="action" value="back">
        入力内容の修正
    </button>
    <button type="submit" name="action" value="submit">
        送信
    </button>
</form>
@endsection