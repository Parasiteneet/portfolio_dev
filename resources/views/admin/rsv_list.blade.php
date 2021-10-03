@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">予約情報 | <a href="{{ route('admin') }}">前の画面に戻る</a></div>
            <div class="card-body">
                <ul class="list-group">
                        @foreach ($infos as $book)
                            <li class="list-group-item">
                                予約者名：{{ $book->name }} ｜予約時間：{{ $book->date }}｜{{ $book->time }}｜電話番号：{{ $book->tel }}
                            </li>
                        @endforeach
                </ul>
                <div class="mt-3">
                    {{ $infos->links() }}
                </div>
        </div>
    </div>
</div>
@endsection