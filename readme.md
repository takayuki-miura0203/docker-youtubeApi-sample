# docker-youtubeApi-sample
Sample code of exec youtube api on docker.

## environment
Everywhere only if docker is enabled.

## exec
1. Change the `/path/to` to real path in `docker-compose.yml` .

2. Change a google API key to your API key in `./youtube/app/src/youtubeApi.php` .

3. Exec below.
```bash
docker-compose build --no-cache
docker-compose run --rm --entrypoint /bin/bash youtube
```

4. In docker process, exec below.
```bash
composer install

cd src
php youtubeApi.php
```

Because of mounted, you can modify `youtubeApi.php` from your host machine.

## reference
### Dockerの開発環境構築 (Mac + Docker + PHP + Apache)
https://qiita.com/Ryooota/items/65ff0c32a5d93f225d7a

### docker-composeでPHP7+composer+MySQL環境の構築
https://qiita.com/uni-3/items/4edc9875f0449cab7421

### Docker の php:apache に、Composer を使えるようにする Dockerfile を作る
https://oki2a24.com/2018/10/12/make-php-apache-dockerfile-to-use-composer/

### PHPでYoutubeAPIを使ってみる
http://challenge.no1s.biz/programming/php/381
