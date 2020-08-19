#!/usr/bin/env bash
export COMPOSER_HOME=/usr/local/bin/.composer
composer install && php artisan migrate
php artisan queue:restart
npm install
npm run prod
