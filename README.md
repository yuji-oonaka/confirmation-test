# お問い合わせフォームアプリケーション

## 環境構築
### Dockerビルド
1. ディレクトリとファイルの作成
2. docker-compose up -d --build

## Larave環境構築
1. docker-compose exec php bash
2. composer install
3. .envファイルを設定
4. php artisan migrate
5. php artisan db:seed

## 使用技術
- PHP 7.49
- Laravel 8.83.27
- MySQL 8.0.26
- Docker

## ER図
![confirmation drawio](https://github.com/user-attachments/assets/7c8e1309-edad-4769-a0d5-800026e2bc51)

## URL
- 開発環境:http://localhost 
- phpMyAdmin:http://localhost:8080

## 課題
- POSTリクエストの処理に関する問題が発生しています
- confirmページにて送信をするエラーが発生します
