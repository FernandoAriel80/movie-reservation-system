<?php

return [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'port' => $_ENV['DB_PORT'],
        'pass' => $_ENV['DB_PASSWORD']
    ]
];
