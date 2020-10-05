<h1 align="center">HaruBiru</h1>
<p align="center">
    <a href="https://github.com/anwareset/harubiru/actions">
        <img src="https://github.com/anwareset/harubiru/workflows/buildtest/badge.svg?branch=master" alt="Github Action">
    </a>
    <a href="https://travis-ci.com/anwareset/harubiru">
        <img src="https://travis-ci.com/anwareset/harubiru.svg?branch=master" alt="Travis CI">
    </a>
    <a href="https://github.com/anwareset/harubiru/blob/master/LICENSE">
        <img src="https://img.shields.io/badge/License-GPLv3-blue.svg" alt="LICENSE">
    </a>
</p>
<h5 align="center">A simple CMS for blogging that builded with Laravel Framework</h5>

---

<p align="center">
	<a name="top" href="http://harubiru.herokuapp.com"><img src="master/harubirupic.png"></a>
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
php artisan storage:link
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

## To Do
- [x] Pull <b>desajati</b> to <b>master</b> and adjustment
- [x] Add some textbox form in Site Settings (BackEnd)
- [ ] Google Analytic Implementation
- [ ] Create Dashboard items
- [ ] Forgot password feature
- [ ] Improvment on User Interface
