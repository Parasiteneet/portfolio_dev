@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">予約情報</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($infos as $info)
                        @foreach ($info->books as $book)
                            <li class="list-group-item">
                                予約者名：{{ $book->name }} ｜予約時間：{{ $book->date }}｜{{ $book->time }}｜電話番号：{{ $book->tel }}
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
    </div>
</div>
@endsection