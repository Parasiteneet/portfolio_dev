@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:10%;">
    <div class="jumbotron" style="color: white; background: radial-gradient(#525252, #131313); border-radius:5%; ">
        <h3 style="text-align: center;">ご予約管理画面</h3><br>
        @isset($rsv->date)
        @if($rsv->date > $today)
            <p class="lead">ご予約中のお日にち：{{ $rsv->date??"予約はございません" }}</p>
        @endif
        @endisset
         <hr class="my-4">
        <div style="text-align: center;">
             <label>変更→</label>
                 <a class="btn btn-outline-light text-secondary btn-lg" href="{{ route('edit') }}" role="button" >GO!</a><br>
             <br><label>削除→</label>
                 <a class="btn btn-outline-light text-secondary btn-lg" href="{{ route('delete') }}" role="button" >GO!</a><br>
        </div>
    </div>
</div>  
@endsection