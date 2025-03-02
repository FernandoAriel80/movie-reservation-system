<?php

$port = 8000; // Puerto por defecto
$publicDir = "public"; // Carpeta pública

// Detectar si hay un puerto disponible
while (!isPortAvailable($port)) {
    $port++; // Si está en uso, intenta con el siguiente
}

echo "🚀 Servidor iniciado en: http://localhost:$port\n";

// Construir el comando del servidor
$command = sprintf(
    'php -S localhost:%s -t %s',
    $port,
    $publicDir,
);

// Ejecutar el servidor embebido de PHP
exec($command);

// Función para verificar si el puerto está disponible
function isPortAvailable($port) {
    $connection = @fsockopen("localhost", $port);
    if ($connection) {
        fclose($connection);
        return false;
    }
    return true;
}
