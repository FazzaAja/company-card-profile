<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Card Profile For Company

This project development for make company who need theirs workers profile card. <br>
With admin, HRD can input staff as much as it needs

## Library in this Project

### <li> [eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) from [Colin Viebrock](https://github.com/cviebrock) </li>
#### Install the package via Composer:
```bash
$ composer require cviebrock/eloquent-sluggable
```

### <li> laravel 9 bootstrap auth scaffolding from [Laravel 9](https://laravel.com/docs/9.x) </li>
Source : [itsolutionstuff](https://github.com/cviebrock/eloquent-sluggable)<br>
<br>
#### 1.Install the package via Composer:
```bash
composer require laravel/ui
```
#### 2.Next, you have to install the laravel UI package command for creating auth scaffolding using bootstrap 5. so let's run the bellow command:
```bash
php artisan ui bootstrap
  
OR
  
php artisan ui bootstrap --auth
```
#### 3.Now let's run bellow command for install npm:
```bash
npm install && npm run dev
```
It will generate CSS and js min files.
#### 4.Next run migration command:
```bash
php artisan migrate
```

### <li> [vcard](https://github.com/jeroendesloovere/vcard) from [Jeroen Desloovere](https://github.com/jeroendesloovere) </li>
#### Install the package via Composer:
```bash
composer require jeroendesloovere/vcard
```
