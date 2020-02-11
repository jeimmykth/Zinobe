# Zinobe

Prueba para Zinobe

## Requisitos

* Composer (https://getcomposer.org/)
* PHP 7 (https://www.php.net/)
* Docker (https://www.docker.com/) 

## Instrucciones

Ejecutar el comando:
> composer install

Luego ejecutar el comando para subir MySQL
> docker-compose up mariadb

Una vez se ejecute MySQL en su totalidad abrir en una terminal diferente y ejecutar 
el siguiente comando
> docker-compose up app

Despues de subir el servicio app puedes ingresar a el navegador a la URL 
http://localhost:8080/

---
Author: Jeimmy Garcia 