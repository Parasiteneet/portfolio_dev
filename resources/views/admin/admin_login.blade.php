@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">管理者専用ログインページ</div>
            <div class="card-body">
            @if ($errors->any())
                <div style="color:red;">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin_login') }}">
              @csrf 
                <div>
                    E-mail: <input class="form-control" type="text" name="email" value="" />
                </div>
                <div>
                    Password: <input class="form-control" type="password" name="pin" value="" />
                </div>
                <div class="mt-3">
                    <input class="btn btn-secondary mt-4" type="submit" value="ログイン" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection