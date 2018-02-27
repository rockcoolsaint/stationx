#!/bin/bash
rsync -vzrh --exclude-from="deploy_exclude.txt" . root@185.130.207.215:/var/www/analytics_ui/staging/temp

ssh root@185.130.207.215 <<-EOF
    cd /var/www/analytics_ui/staging
    rm -rf ./backup # Delete previous backup
    mv ./live ./backup # Create new backup
    mv ./temp ./live
    mkdir ./temp # create new temp direct for next deployment
    cp ./config/.env ./live
    cd ./live
    composer install --no-dev
    php artisan key:generate
    php artisan migrate --force
    chmod -R 755 .
    chmod -R 777 ./storage
EOF