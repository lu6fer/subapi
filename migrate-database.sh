#!/bin/bash
set -e 
echo "PWD"
pwd
echo '-------------------------------------------------'
echo "Migrating database 'php artisan migrate --force'..."
php artisan migrate --env="openshift"
echo "Application seed"
php artisan db:seed
