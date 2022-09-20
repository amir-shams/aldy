#!/bin/bash 


php bin/magento maintenance:enable
rm -rf generated/*

rm -rf pub/static/*

php bin/magento deploy:mode:set production


php bin/magento cache:clean config

php bin/magento maintenance:disable
