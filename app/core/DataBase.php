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
    private $db_port;

    public function __construct(){
        $config = require __DIR__ . '/../../config/serve.php';
        // Obtener variables de entorno
        $this->db_name = $config['db']['name']; 
        $this->db_host = $config['db']['host']; 
        $this->db_port = $config['db']['port']; 
        $this->db_user = $config['db']['user']; 
        $this->db_password = $config['db']['pass']; 
        /*$ this->db_name = getenv('DB_NAME');
        $this->db_host = getenv('DB_HOST');
        $this->db_port = getenv('DB_PORT');  // Nuevo campo para el puerto
        $this->db_user = getenv('DB_USER');
        $this->db_password = getenv('DB_PASSWORD'); */
    }

    public function getConnection()
    {

        try {
            $pdo = new PDO("mysql:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};", $this->db_user, $this->db_password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   
            return $pdo;
        } catch (PDOException $th) {
            return $th->getMessage();
        }
    }
}
