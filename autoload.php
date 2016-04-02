<?php

/**
 * Local Autoload file
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @version 1.0
 * @package OtherCode\Granter
 */
spl_autoload_register(function ($class) {

    $prefix = 'OtherCode\Granter\\';
    $base_dir = __DIR__ . '/src/';
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});