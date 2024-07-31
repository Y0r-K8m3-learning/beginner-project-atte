# beginner-project-atte(初級模擬案件)
#アプリケーションの説明
 - 勤怠管理アプリ

## 作成した目的
 - 人事評価のため

 ## アプリケーションURL
 - デプロイ用
### [Atte](http://ec2-57-180-199-228.ap-northeast-1.compute.amazonaws.com/)

 ## リポジトリURL
 - 開発用
 ### [github](https://github.com/Y0r-K8m3-learning/beginner-project-atte.git)

 ## 機能一覧
 - ログイン
 - ユーザ登録(メール認証)
 - 勤怠管理
  - 打刻
  - 勤怠一覧
  - ユーザ一覧
  - ユーザ別勤怠一覧

## 使用技術
- PHP 8.3.7
- laravel 11.10.0
- MySQL 8.0.37


## テーブル設計
![TBL定義](https://github.com/user-attachments/assets/b9c87a4f-d6f4-4f45-a7d2-a7aad607c0c3)


## ER図
![ER](https://github.com/user-attachments/assets/5599c11c-bbe4-4e41-8458-2de9a07751f2)


## 環境構築
### Docker環境で実行
### ビルドからマイグレーション、シーディングまでを記述する
- Dockerビルド
  1. `git clone https://github.com/Y0r-K8m3-learning/beginner-project-atte.git`
  2. `cd beginner-project-atte`
  3. `docker-compose up -d --build`
 
　※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.ymlファイルを編集してください。
 
- Laravel環境構築
 1. `docker-compose exec php bash`
 2. `composer install`
 3. `cp -p .env.example .env`
 4. `php artisan key:generate`
 5. `php artisan migrate`
 6. `php artisan db:seed`
     ※各テーブル50件ずつダミーデータを作成します。
     　Attendance(勤怠)テーブルは実行日前後10日間の日付データがランダムに作成されます。
     
## その他
  1. OSによっては実行時にログファイル権限エラーが発生します。
 　- (stream or flie ～ Permission deinied」）エラーが発生する場合は下記コマンドを実行してください。
     `sudo chmod 777 -R storage`

 2. .envについて
 - DB設定はそのまま利用できます。（確認用のため明記しています）
 - 実行環境に応じて必要なメール設定を行ってください。
 ```MAIL_MAILER=
 MAIL_HOST=
 MAIL_PORT=
 MAIL_USERNAME=
 MAIL_PASSWORD=
 MAIL_ENCRYPTION=
 MAIL_FROM_ADDRESS=test@exmaple.come
 MAIL_FROM_NAME="${APP_NAME}"
 

