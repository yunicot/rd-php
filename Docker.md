```
docker pull ubuntu
docker run -it ubuntu
docker run -it ubuntu ps -A
docker ps
docker ps -a
docker rm ${id}
docker rm $(docker ps -aq)
docker rmi ubuntu:latest
docker rmi $(docker images -q)
docker run -it alpine sh
    apk add bash
    bash
    exit
    exit
docker ps #empty
docker ps -a
docker start ${name}
docker stop ${name}
docker run -d --name pg postgres
docker logs pg
docker pull postgres:${tag}
ctop
docker exec -it pg bash
    top
    exit
    
 docker exec -it pg bash
    top
    exit
docker ps
docker stop pg
docker start ${name}
docker attach ${name}
docker stop ${name}
docker run -d --name pgi -p 5432:5432 postgres
docker stop pgi
docker run -it -v $(pwd):/app/srv alpine sh
```

https://github.com/bcicen/ctop

```
docker login
docker build -t ${name} .
docker push ${name}
```