#!/bin/bash
docker run -v $(pwd)/html:/var/www/html -p 80:80 fewo-treu
