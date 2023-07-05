#!/bin/bash

docker run -p 80:8080 -v $(dirname $(readlink -f $0)):/var/www/html trafex/php-nginx
