# Laravel sestem Development


[![GitHub release (latest by date)](https://img.shields.io/github/v/release/codeigniter4/CodeIgniter4)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub license](https://img.shields.io/github/license/codeigniter4/CodeIgniter4)](https://github.com/codeigniter4/CodeIgniter4/blob/develop/LICENSE)

<br> 

## What's in this Laravel development package?

https://github.com/wpdew-com/laraveladmin

Laravel is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://laravel.com/).


### Documentation

The [User Guide](https://laravel.com/docs/9.x) is the primary documentation for Laravel.


## Server Requirements

PHP version 8.0 or higher is required, with the following extensions installed:


- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- xml (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)

## Installation and launch of the project. 

1. Clone repository

```
git clone https://github.com/wpdew-com/laraveladmin
```

2. Clone repository to the current folder 

```
git clone https://github.com/wpdew-com/laraveladmin .; rd .gitignore; rd readme.md; rm -r -fo .git
```

3. Go to core folder and Update composer

```
composer update
```

4. To generate a new Application Key in Laravel
```
php artisan key:generate
```


## Run install

1.Open the site in the browser and go through the installation procedure.

2.Enter the database details, login and password of the administrator.

3.After installation, go to the admin panel at the address https://site.loc/admin

## Temlate launch and operation

1. Go to the Public\Themes\yourdesign\assets folder 

1. Run npm install

```
npm install
```

2. Run work

```
gulp
```

2. Build template

```