# HaruBiru
A simple CMS for blogging that builded with Laravel Framework

<p align="center">
	<a name="top" href="https://github.com/anwareset/harubiru"><img src="https://github.com/anwareset/harubiru/raw/master/harubiru1.png"></a>
</p>

## Requirements
Just run this command
```text
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed --class UsersTableSeederAddDefaultAdmin
mysqladmin -uroot -p create harubiru
```

## Configuration
Please check your <b>.env</b> configuration
```text
APP_NAME=HARUBIRU
...
APP_URL=http://harubiru.test
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=harubiru
DB_USERNAME=root
DB_PASSWORD=
```
