<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Installation
1. Open your terminal and go to your `~/htdocs` folder.
2. Clone this repository `git clone https://github.com/rizalihwan/point-of-sale.git`
3. Go inside to folder by `cd point-of-sale`
4. Run `composer install`
5. Create `.env` file with command `cp .env.example .env`
6. Generate key inside `.env` file by `php artisan key:generate`
7. Start your XAMPP/etc service
8. Create database on XAMPP/etc, example name: `db_laravel`
9. Open `.env` file and config your database:
    ```sh
    DB_DATABASE='db_laravel'
10. Then run the seeder `php artisan db:seed`
10. Start your local server `php artisan serve`
11. Login with:
    |Username|Password|Level|
    |:----|:------:|-------:|
    |admin|password|admin|
11. Open link `localhost:8000` as default on your browser

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact Info

Feel free to ask me at
- [Telegram](https://t.me/ihw_me/).

