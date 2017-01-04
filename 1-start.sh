#!/bin/bash
#docker run -p 80:80 fewo-treu
docker run -v $(pwd)/html:/var/www/html -p 80:80 fewo-treu
