<?php

// Si el archivo solicitado existe, servirlo directamente
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . $_SERVER["REQUEST_URI"])) {
    return false;
}

// Cargar el framework (en tu caso, api.php o index.php)
require __DIR__ . "/index.php";
