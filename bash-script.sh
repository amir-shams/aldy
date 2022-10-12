#!/bin/bash
TIME=7200 #MINUETS   (5 DAYS)
SRC=/tmp/ #DIRECTORY
find $SRC -type d -mmin +$TIME -exec rm -rf {} +
