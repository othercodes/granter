permission-class
================

Muestra y cambia los permisos del sistema.

Metodos
=======
<table>
<tr><td><b>Nombre</b></td><td><b>Descripcion</b></td><td><b>Parametros</b></td></tr>
<tr>
<td><b>getPerms()</b></td>
<td>Obtinen los permisos de un archivo dado.</td>
<td>
<div><b>$file:</b> archivo del que se obtienen los permisos.</div>
</td>
</tr>
<tr>
<td><b>getAllPerms()</b></td>
<td>Obtiene todos los permisos de los elementos de un directorio.</td>
<td>
<div><b>$recursive:</b> obtiene recursivamente los permisos de los subdirectios, por defecto FALSE</div>
<div><b>$path:</b> ruta de del directorio, por defecto la del constructor.</div>
</td>
</tr>
<tr>
<td><b>setPerms()</b></td>
<td>Establece los permisos de un archivo dado.</td>
<td>
<div><b>$perms:</b> los nuevos permisos a aplica, en octal ej:0777, 0644, 755</div>
</td>
</tr>
<tr>
<td><b>setAllPerms()</b></td>
<td>Establece todos los permisos de los elementos de un directio.</td>
<td>
<div><b>$perms:</b> nuevos permisos a aplicar</div>
<div><b>$recursive:</b> TRUE|FALSE establece si la accion es recursiva entre subdirectorios, por defecto FALSE</div>
<div><b>$affected:</b> DIR|FILE|ALL estable que elementos seran afectados, por defecto ALL (TODOS)</div>
<div><b>$path:</b> ruta del directorio, por defecto la del contructor.</div>
</td>
</tr>
</table>

Uso
===
Para usar esta clase primero debemos importarla:
```php
require "permissions.class.php";
```

Despues instanciaremos la clase y ejecutaremos los metodos que deseemos, por ejemplos para obtener los permisos de todos los archivos del directorio "Documentos":

```php
$permissions = new permissions("Documentos/");
```

**NOTA**: Las rutas pueden ser absolutas o relativas.

```php
$permissions->setAllPerms(0777,TRUE,"FILE");
```
El codigo de arriba cambiara de manera recursiva todos los permisos a 777 de los archivos de la carpeta "Documentos/", que es la que se establecio en el constructor.
