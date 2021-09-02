<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <style>
      body
      {
        height:1080px;
        width:100%;
        background: linear-gradient(45deg, rgba(153,153,153,0.7), rgba(0,0,0,0.7));
        /* background-image:url(/images/phone.jpeg); */
        background-repeat: no-repeat;
        background-size:cover;
      }
      #phone 
      {
        height:500px;
        width:450px;
        /* border-radius:50%; */

      }
      .phone-img 
      {
        position:absolute;
        left:800px;
        top:100px;
      }
    </style>  
</head>
<body>
    <div id="app">
        @include('nav')
        <main class="py-4">
          <div class="container">
            <div class="phone-img">
              <img id="phone" src="/images/phone1.png">
            </div>
              <label>会員登録せずにご予約→</label>
                <a class="btn btn-outline-info text-info btn-lg rounded-circle" href="{{ route('input') }}" role="button" >GO!</a><br>
              <br><label>会員登録してご予約→</label>
                <a class="btn btn-outline-success text-success btn-lg rounded-circle" href="{{ route('register') }}" role="button" >GO!</a><br>
              <br><label>ログインはこちら→</label>
                <a class="btn btn-outline-warning text-warning btn-lg rounded-circle" href="{{ route('login') }}" role="button" >GO!</a><br>
              </div>
              <div class='mt-4'>
                  <h5 class="pt-2"><em>ご予約の確認や変更はご登録後にご使用できます。</em></h5>
          </div>
        </main>
    </div>
</body>
</html>
