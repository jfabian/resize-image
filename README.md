Redimensionador de Imagenes
===========================

Un script para redimensionar imagenes usando los comandos del ImageMagick, algunos comandos PHP y el .htaccess

Requisitos
----------

Para que el script pueda funcionar se necesita lo siguiente:

* ImageMagick
* Apache (mod_rewrite)
* PHP


Instalacion
-----------

Solo basta con descargar el script, tener activado el mod_rewrite del Apache y copiar la carpeta `resize-image` al `public_html` y colocarle permisos de escritura a la carpeta images.

Redimensionar mediante URL
--------------------------

Por ejemplo si tenemos nuestra imagen `test.png` y queremos redimensionarlo a 100px de ancho, basta con entrar por:

http://localhost/resize-image/images/100__test.png

Si queremos ponerle un tamaño exacto, solo agregamos:

http://localhost/resize-image/images/100__200__test.png
