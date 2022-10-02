rc-status -s
sleep 10
rc-service apache2 start 
sleep 5
rc-status -s | grep -i apache2
rc-service php-fpm8 start 
sleep 5
rc-status -s | grep -i php-fpm8
rc-service rsyncd start 
sleep 5
rc-status -s | grep -i rsyncd
rc-service sysfsconf start 
sleep 5
rc-status -s | grep -i sysfsconf
# rc-service sysctl start 
# sleep 5
# rc-status -s | grep -i sysctl
# rc-status -s