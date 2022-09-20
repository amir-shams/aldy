#!/bin/bash

#Single user mode
#One-user mode is the simplest case. In this case user shall belong to group, which own Magento system and also runs web-server. For them the following rules apply:
#    All directories should have 770 permissions. Such a permission gives read, write and execute permission to the owner and to his group, but no permissions to anyone else.
#    All files should have 660 permissions. Such a permission means, that owner and the group can read and write but other users have no permissions.
#    Temporary and media directories (/var, /pub/media, /pub/static) should have public access (777 permission)
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
find ./var -type d -exec chmod 777 {} \;
find ./pub/media -type d -exec chmod 777 {} \;
find ./pub/static -type d -exec chmod 777 {} \;

#Two-user mode
#Basically this scheme can be used for any quantity of users, they just need to be splitted to the following groups:
#    The web server group, which runs the Magento Admin (including Setup Wizard) and storefront;
#    A command-line group, which can remotely log in to the server and perform maintenance tasks. This group also should be able to run Magento cron jobs and command-line utilities.
#In this case permissions setup shall be as in one-user mode, with the two exceptions. Directories vendor and app/etc and its content should be read/write accessible for the second group. It can be done via the following commands:

find ./vendor -type d -exec chmod 775 {} \;
find ./app/etc -type d -exec chmod 775 {} \;
find ./vendor/* -type f -exec chmod 664 {} \;
#
chmod 666 pub/static/frontend/Magento/luma/en_US/requirejs-config.js
chmod o-rwx app/etc/env.php && chmod u+x bin/magento
