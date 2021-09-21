@extends('layouts.app')

@section('content')
<div>
@foreach ($infos as $info)
    <p> 予約：{{ $info }}<p>
@endforeach
</div>
@endsection