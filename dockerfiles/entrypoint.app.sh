#!/bin/bash

# composer
composer install
php artisan key:generate
php artisan migrate --seed
php artisan optimize
chmod -R 777 storage

php-fpm