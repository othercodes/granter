permission-class
================

Muestra y cambia los permisos del sistema.

Metodos
=======
<table>
<tr><td>Nombre</td><td>Descripcion</td><td>Parametros</td></tr>
<tr>
<td>getPerms()</td>
<td>Obtinen los permisos de un archivo dado.</td>
<td>
<ul>
<li>$file: archivo del que se obtienen los permisos.</li> 
</ul>
</td>
</tr>
<tr>
<td>getAllPerms()</td>
<td>Obtiene todos los permisos de los elementos de un directorio.</td>
<td></td>
</tr>
<tr>
<td>setPerms()</td>
<td>Establece los permisos de un archivo dado.</td>
<td></td>
</tr>
<tr>
<td>setAllPerms()</td>
<td>Establece todos los permisos de los elementos de un directio.</td>
<td></td>
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

```
