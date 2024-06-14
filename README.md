# beginner-project-atte(初級模擬案件)　<実装中>

## 環境構築
### Dockerのビルドからマイグレーション、シーディングまでを記述する
-Dockerビルド
  1. `git clone https://github.com/Y0r-K8m3-learning/beginner-project-atte.git`
  2. `cd kakunin-test-fashionablylate`
  3. `docker-compose up -d --build`
 
　※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.ymlファイルを編集してください。
 
-Laravel環境構築
  1. `docker-compose exec php bash`
  2. `composer install`
  3. `cp -p .env.example .env`
  4. `php artisan key:generate`
  
  ~~5. `php artisan migrate`~~
  ~~6. `php artisan db:seed`~~
　
  ※OSによって、ログファイル権限エラー
 stream or flie ～ Permission deinied」）エラーが発生する場合は下記コマンドを実行してください。
  `sudo chmod 777 -R storage`

## 使用技術(実行環境)
- PHP 8.3.7
- laravel  11.10.0
- MySQL 8.0.37


  
## 発生しているエラー
![image](https://github.com/Y0r-K8m3-learning/beginner-project-atte/assets/171590806/e6f9c7c2-114b-4965-a2a5-7c1d116f2f27)

- FortifyServiceProvider自体は通っています
FortifyServiceProvider.php dd関数をセット
![image](https://github.com/Y0r-K8m3-learning/beginner-project-atte/assets/171590806/6f3faeae-dd56-468d-a5b5-94b40d991f26)

![image](https://github.com/Y0r-K8m3-learning/beginner-project-atte/assets/171590806/c729bb6b-54e8-4338-8b3d-766c4fa2c2b5)

