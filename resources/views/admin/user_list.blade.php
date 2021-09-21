@extends('layouts.app')

@section('content')
<div>
    @foreach ($user_list as $user)
      <p>
        <a href="{{ url('admin/user/'. $user->id) }}">
          {{ $user->name }}
        </a>
      </p>
    @endforeach
</div>
@endsection