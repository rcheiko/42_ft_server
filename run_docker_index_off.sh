docker build -t img .
docker run -ti -p 443:443 -p 80:80 --env autoindex=off --name=cont img
