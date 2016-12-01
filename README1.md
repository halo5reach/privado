LEVANTAR PROJECTO EN UN SERVIDOR LOCAL

1. Situarse en la carpeta de aviacion1.5 con cmd
2. Actualizar proyecto escribiendo lo siguiente. -- escribir en cmd -- ( Composer update )
3. Crear un nuevo archivo con el nombre de ( .env ) colocar el usuario y contraseña de su pertenencia.
4. Generar llave para el sistema -- escribir en cmd -- ( php artisan key:generate )
5. Crear una base de datos para el sistema (MySQL). Puede usar phpmyadmin o cualquier otro con el nombre de ( aviacion )
6. Generar la migración -- escribir en cmd -- ( php artisan migrate ) Esto crea las tablas en la base de datos.
7. Todo listo para empezar a trabajar. 
