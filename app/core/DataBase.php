<?php

class DataBase
{

    private $db_name = "prueba_home";
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";

    public function getConnection()
    {

        try {
            $pdo = new PDO("mysql: host={$this->db_host}; dbname={$this->db_name};",$this->db_user,$this->db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
            return $pdo;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
