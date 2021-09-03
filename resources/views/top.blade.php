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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&family=Montserrat:wght@200&family=Oswald:wght@500&display=swap" rel="stylesheet">

    <!-- styles  -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <main>
    <div class="nav-container">
      <nav>
        <h1 id="logo">EZRV</h1>
        <ul>
          <li class="reg"><a href="{{ route('register') }}">Register</a></li>
          <li class="login"><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav>
    </div>
    <section class="home">
      <div class="showcase">
         <h2 id="grid-h2">reg<h2>
         <img id="phone" class="grid-img" src="/images/smart.jpeg" alt="Picture">
         <div class="info">
           <h3>Easy booking, Whoever wants.</h3>
           <p>このサイトは誰でも簡単に面倒な登録などもなく、予約することが可能です。</p>
         </div>
      </div>
    </section>
  </main>
</body>
</html>
