## About EZBKING

個人でも簡単に予約を受けられるWebアプリケーションです。ユーザは予約の登録・変更・削除・を行えます。どんなユーザでも簡単に使用することが可能で、面倒な登録をしなくても利用できます。

## EZBOOKING
<img width="1437" alt="スクリーンショット 2021-10-13 20 53 13" src="https://user-images.githubusercontent.com/75173875/137128403-6bbd5c83-d7e6-4c95-b89f-2abd7af0e1a9.png">

## 使用技術
- PHP 7.4.15
- Laravel 5.8
- MySql 5.7.34
- Apache 2.4.46
- AWS
  - VPC
  - EC2
  - Route53
- PHPUnit 7.5.20
- Vue.js

## 機能一覧

- ユーザー登録(Auth)
- ログイン機能(Auth)
- 予約機能
  - 新規予約
  - 予約の変更
  - 予約の削除
  - 予約日時の確認
- メール機能(Mailable)
  - 予約完了時に管理人のメールアドレスにメッセージが届く。
- 管理機能
  - 管理者専用ログイン(Middleware)
  - ユーザ一覧
  - ユーザの予約一覧
  - ユーザの削除

## Contributing

