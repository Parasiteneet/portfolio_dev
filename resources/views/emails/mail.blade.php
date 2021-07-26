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
      <p>氏名：{{ $inputs->name }}</p>
      <p>電話番号：{{ $inputs->tel }}</p>
      <p>予約日：{{ $inputs->date }}</p>
      <p>予約時間：{{ $inputs->time }}</p>
      <p>備考：{{ $inputs->body }}</p>
    </div>
  </body>
</html>