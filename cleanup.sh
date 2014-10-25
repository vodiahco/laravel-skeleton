#!/bin/bash

echo "Beginning clean up"
echo "#########################################################"
echo "Cleaning images"
sudo rm public/uploads/{mobile,web,thumbnail}/*
echo "Clearing cache"
php artisan cache:clear
echo "setting cache files mode"
sudo chmod -R 777 app/storage/
echo "Done"
