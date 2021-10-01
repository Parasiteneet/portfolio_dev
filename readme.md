## About EZBKING

個人でも予約を受けられるWebアプリケーションです。予約の登録・変更・削除・を行えます。誰でも簡単に使用することが可能で、面倒な登録をしなくても利用できます。

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
  -管理者専用ログイン(Middleware)
  -ユーザ一覧
  -ユーザの予約一覧
  -ユーザの削除

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
