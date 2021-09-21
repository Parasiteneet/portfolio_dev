@extends('layouts.app')

@section('content')
<div>
  <p>U can manage users<p>
  <p><a href="{{ route('user_list') }}">→</a></p>
  <p>U can see resevations here<p>
  <p><a href="{{ route('rsv_list') }}">→</a></p>
</div>
@endsection