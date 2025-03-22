<?php

namespace App\Core;
use PDO;
use PDOException;
class DataBase
{
    private PDO $connection;

    public function __construct(){
    
        $config = require __DIR__ . '/../../config/database.php';
        try {
            $this->connection = new PDO(
                "mysql:host={$config['db']['host']};port={$config['db']['port']};dbname={$config['db']['name']}",
                $config['db']['user'],
                $config['db']['pass']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
