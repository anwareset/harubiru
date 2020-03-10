# HaruBiru
A simple CMS (Content Management System) for blogging that builded with Laravel Framework

<p align="center">
	<a name="top" href="https://github.com/anwareset/harubiru"><img src="https://github.com/anwareset/harubiru/raw/master/harubiru1.png"></a>
</p>

## Requirements
Run this command
```text
mysqladmin -uroot -p create harubiru
cp .env.example .env
composer install
composer dump-autoload
php artisan key:generate
php artisan migrate:fresh --seed
```

## Configuration
Please check your <b>.env</b> configuration
```text
APP_NAME=HaruBiru
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

Add <b>harubiru.test</b> in your <b>/etc/hosts</b> configuration
```text
...
127.0.0.1	localhost harubiru.test
...
```

## Landing Page
You can access the <b>landing page</b> by visit <b>http://harubiru.test</b>

## Admin Page
You can access the <b>manager page</b> by visit <b>http://harubiru.test/webmanager</b>