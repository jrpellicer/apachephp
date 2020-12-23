# apachephp
Dockerfile con servidor Apache, PHP y un index.php que muestra datos del contenedor para Docker Swarm.

Para que *index.php* pueda mostrar el nombre del nodo de Docker Swarm que está corriendo el servicio es necesario montar el fichero */etc/hostname* en el contenedor.

## Ejecución en Docker
Para la ejecución como contenedor:
    docker run --name apache -d -p 80:80 jrpellicer/apachephp

## Ejecución en Docker Swarm
Para la ejecución como servicio:
    docker service create --name apache -p 80:80 --replicas 2 --mount type=bind,source=/etc/hostname,destination=/tmp/host-hostname,readonly=true jrpellicer/apachephp
