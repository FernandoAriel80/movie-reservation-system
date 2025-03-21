<?php

namespace App\Core;
use PDO;
use PDOException;
class DataBase
{

    private $db_name = "prueba_home";
    private $db_host = "127.0.0.1";
    private $db_user = "root";
    private $db_password = "";

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
