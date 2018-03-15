#!/bin/bash
docker build -f Dockerfile_db -t tskehin/yetube_db:1.0 .
docker push tskehin/yetube_db:1.0 

docker build -f Dockerfile_web_1_0 -t tskehin/yetube_web:1.0 .
docker push tskehin/yetube_web:1.0

docker build -f Dockerfile_web_2_0 -t tskehin/yetube_web:2.0 .
docker push tskehin/yetube_web:2.0

docker build -f Dockerfile_volume -t tskehin/yetube_volume:1.0 .
docker push tskehin/yetube_volume:1.0
