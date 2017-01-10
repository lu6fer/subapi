#!/bin/bash
set -e 

echo "Migrating database 'php artisan migrate --force'..."
php --version
php /opt/app-root/src/composer.phar install
php artisan migrate
php artisan db:seed
