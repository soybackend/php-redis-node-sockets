# php-redis-node-sockets
Ejemplo de envío de notificaciones desde php a través de redis y websockets

## Instalación
* Para instalar, se debe tener instalado php, redis server, nodejs y npm
* Se instalan las dependencias de node con: npm install

## Cliente de redis para php
Este es el cliente de redis para php, en el repo está la manera como se debe instalar
https://github.com/phpredis/phpredis

En el archivo index.php se debe cambiar la ip del servidor donde corre redis (puede ser 127.0.0.1 si es que es local)

## Para Ejecutar

* Debe estar corriendo redis-server
* Se corre: node server.js 
* Se abre index.html en un navegador
* Se lanza la notificación con: php index.php