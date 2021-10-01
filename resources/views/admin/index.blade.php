@extends('layouts.app')

@section('content')
<div>
  <p>U can manage users<p>
  <p><a href="{{ route('user_list') }}">→</a></p>
  <p>U can see resevations here<p>
  <p><a href="{{ route('rsv_list') }}">→</a></p>

  <form method="post" action="{{ route('admin_logout') }}">
      @csrf
      <input type="submit" class="btn btn-secondary mt-4" value="ログアウト" />
  </form>
</div>
@endsection