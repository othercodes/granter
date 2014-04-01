permission-class
================

Muestra y cambia los permisos del sistema.

Metodos
=======
Nombre             | Descripcion |
-------------------|---------------------------------------------------------------|
**getPerms()**:    | Obtinen los permisos de un archivo dado. | * asd *
**getAllPerms()**: | Obtiene todos los permisos de los elementos de un directorio. |
**setPerms()**:    | Establece los permisos de un archivo dado. |
**setAllPerms()**: | Establece todos los permisos de los elementos de un directio. |

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
