<?php

use App\Core\DataBase;

$request_url =  explode("?", $_SERVER["REQUEST_URI"])[0];

function result()
{
    try {

        $db = new DataBase();
        $conn = $db->getConnection();
        
        $stmt = $conn->query("select * from users");
       if ($stmt->execute()) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
       }
    } catch (\Throwable $th) {
        throw $th;
    }
}

if ($request_url == "/") {
    //echo "hola desde home";

    $users =  result();
    //print_r(result());

    include "../views/home.php";
} else {
    echo "ruta no existe";
}
