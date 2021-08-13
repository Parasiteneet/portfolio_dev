@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>ご登録いただきありがとうございます。</p><br>

                    <a class="btn btn-outline-success text-success btn-lg" href="{{ route('reserve') }}" role="button" >ご予約はこちら</a>
                    <a class="btn btn-outline-info text-info btn-lg" href="{{ route('mypage') }}" role="button" >マイページはこちら</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection