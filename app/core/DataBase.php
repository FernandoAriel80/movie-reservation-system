<?php

namespace App\Core;
use PDO;
use PDOException;
class DataBase
{
    private $db_name;
    private $db_host;
    private $db_user;
    private $db_password;

    public function __construct(){
        $config = require __DIR__ . '/../../config/serve.php';

        $this->db_name = $config['db']['name']; 
        $this->db_host = $config['db']['host']; 
        $this->db_user = $config['db']['user']; 
        $this->db_password = $config['db']['pass']; 
    }

    public function getConnection()
    {

        try {
            $pdo = new PDO("mysql: host={$this->db_host}; dbname={$this->db_name};",$this->db_user,$this->db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
            return $pdo;
        } catch (PDOException $th) {
            return $th->getMessage();
        }
    }
}
