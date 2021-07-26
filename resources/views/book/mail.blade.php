<!-- ここで書かれるHTMLがメールの受信内容になる。HTMLがレンダーされて、違うブラウザ such as Gmailとかで表示される。 -->
<!-- メールは平文テキストとHTML両者とも設定できる。HTMLで設定した方が視覚的にグッドだけど、今回の場合は予約の確認だけなので、平文テキストだけでもいいかもしれない。セキュリティで弾かれる可能性があるらしい。 -->

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>サイトタイトル</title>
  </head>
  <body>
    <div>
      <br>
        <p>氏名：{{ $name }}</p><br>
        <p>電話番号：{{ $tel }}</p><br>
        <p>予約日：{{ $date }}</p><br>
        <p>予約時間：{{ $time }}</p><br>
        <p>備考：{{ nl2br($body) }}</p><br>
      <br>
    </div>
  </body>
</html>