<div align="center">
    <a href="https://paradox.ar" target="_blank">
        <img src="https://paradox.ar/images/logo.png" height="100px">
    </a>
    <h1 align="center">Ejercicio de programación</h1>
    <br>
</div>

Proyecto desarrollado en [Yii 2 Framework](http://www.yiiframework.com/).


INSTALACION
------------

### Install via Docker

Si no tienes instalado [Docker](https://www.docker.com/), puedes instalarlo siguiendo los pasos detallados en la [Guia de Docker](https://www.docker.com/get-started).
Ademas, es necesario instalar [Docker Compose](https://docs.docker.com/compose/install/) para poder crear la imagen.

Una vez instalado, dentro de este directorio, correr el siguiente comando para generar la imagen.

~~~
docker-compose build
~~~

Una vez ya creada la imagen, correr el siguiente comando para iniciar la imagen.

~~~
docker-compose up -d
~~~


### Agregar los DNS
Modificar el arhivo /etc/hosts (o el equivalente) agregando estos entries:
```
127.0.0.1       backend.paradox.local
127.0.0.1       frontend.paradox.local
```

### Inicializacion de Yii
Entrar al contenedor de docker.
```
docker exec -it ejercicioparadox_phpfpm_1 /bin/sh
```

Instalar el composer y actualizar las variables de entorno
```
composer update
```
```
php init
```

### Correr las migraciones
```
php yii migrate
```