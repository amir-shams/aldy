#!/bin/bash

#src=.

find . -type d -mmin +6 -exec rm -rf {} +
