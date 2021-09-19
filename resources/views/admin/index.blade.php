@extends('layouts.app')

@section('content')
<div>
  @foreach ($users as $user)
  <p>{{ $user->name }}<p>
  <p>{{ $user->email }}<p>
  @endforeach
</div>
@endsection