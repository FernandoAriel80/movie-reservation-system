<?php

// Cargar el archivo .env
require_once __DIR__ . '/vendor/autoload.php'; // Asegúrate de que el autoload de Composer esté incluido
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


//require_once __DIR__ . '/vendor/autoload.php'; 
/* // Convierte los namespaces en rutas
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
 */
// index.php o el archivo principal de inicio
//require_once __DIR__ . '/vendor/autoload.php';  // Cargar el autoload de Composer

/* use Dotenv\Dotenv;

// Cargar el archivo .env desde la raíz del proyecto
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();  // Cargar las variables de entorno
 */
