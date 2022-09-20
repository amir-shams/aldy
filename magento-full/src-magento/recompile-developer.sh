#!/bin/bash 

rm -rf generated/*
php bin/magento cache:flush
php bin/magento setup:upgrade
php -d memory_limit=-1 bin/magento setup:di:compile

rm -rf var/view_preprocessed/
rm -rf pub/static/*
php  -d memory_limit=-1 bin/magento setup:static-content:deploy  -f


