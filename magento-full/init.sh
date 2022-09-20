composer install
apachectl -D FOREGROUND  ;rm -rf var/cache/* ; rm -rf var/generation/*  && bin/magento app:config:import  && bin/magento setup:upgrade
bin/magento setup:static-content:deploy -f
bin/magento setup:di:compile
bin/magento indexer:reset && bin/magento indexer:reindex  chmod -R 777 var/*
chmod 777  /var/www/html/vendor/magento/framework/Session/SaveHandler.php  ; chmod -R 777 /var/lib/php/sessions ;chown -R www-data:www-data * ; chown -R www-data:www-data ./var/* ./vendor/* ./pub/*
bin/magento cron:run

