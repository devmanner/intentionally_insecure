#!/bin/bash

docker run -p 8080:8080 -v $(dirname $(readlink -f $0)):/var/www/html trafex/php-nginx
