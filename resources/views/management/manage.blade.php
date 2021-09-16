<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/mypage.css') }}" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>マイページ</title>
</head>
<body>
  <div class="nav-bar">
      @include("nav")
  </div>

  <div id="app" class="top-container">
    <div class="mypage-container">
        <div profile-image-container>
            <img  id="profile-pic" :src="image"
            >
            <p class="profile-name">
                {{ $name }} 
                <span><i class="fas fa-envelope"></i></span>
                ({{ $mail }})
            </p>
        <div class="horizontal-line"></div>
        </div>
        <div class="booking-date">
            <span><i id="calender-icon" class="fas fa-calendar-alt fa-2x calender-color"></i></span>
            @isset($rsv->date)
            @if($rsv->date > $today)
            <span class="reservation">ご予約中の日にち：{{ $rsv->date??"ご予約はございません" }}</span>
            @endif
            @endisset           
        </div>
        <div class="horizontal-line1"></div>
        <div class="make-booking">
            <span><i id="book-icon" class="fas fa-book fa-2x"></i></span>
            <span class="book-sentence">ご予約を変更</span>
            <span><a href="{{ route('edit') }}"><i id="phone-icon" class="far fa-edit fa-3x"></i></a></span>
            <span class="click"> ←こちらをクリック!</span>
        </div>
        <div class="horizontal-line2"></div>
        <div class="management">
            <span><i id="book-icon" class="fas fa-book-open fa-2x"></i></span>
            <span class="book-sentence">ご予約を削除</span>
            <span><a href="{{ route('delete') }}"><i id="phone-icon" class="fas fa-trash fa-3x"></i></a></span>
            <span class="click"> ←こちらをクリック!</span>
        </div>
        <div class="horizontal-line3"></div>
    </div>
  </div>

    

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script>
      var app = new Vue ({
        el:"#app", //element 対象となる要素
        data: {
          product: "Socks",
          image: "/images/me.png",
        },
      });
    </script>
</body>
</html>