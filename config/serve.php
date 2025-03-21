<?php
// Configuracion de la base de datos
return [
    'db' => [
        'host' => getenv('DB_HOST'),
        'name' => getenv('DB_NAME'),
        'user' => getenv('DB_USER'),
        'port' => getenv('DB_PORT'),
        'pass' => getenv('DB_PASSWORD')
    ]
];