<?php 
// Convierte los namespaces en rutas
spl_autoload_register(function ($class) {
    // Convierte los namespaces en rutas del sistema de archivos
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    // Construye la ruta completa al archivo
    $file = __DIR__ . '/' . $path;

    // Incluye el archivo si existe
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Clase no encontrada: $class");
    }
});
