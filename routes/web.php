<?php

use App\Core\DataBase;
//use PDO;

$request_url =  explode("?", $_SERVER["REQUEST_URI"])[0];

function result()
{
    try {

        $db = new DataBase();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("select * from users");
       // $stmt->exec()
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
        throw $th;
    }
}

if ($request_url == "/") {
    //echo "hola desde home";

    $users =  result();

    include "../views/home.php";
} else {
    echo "ruta no existe";
}
