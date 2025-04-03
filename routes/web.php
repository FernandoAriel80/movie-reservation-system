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

/* if ($request_url == "/") {
    //echo "hola desde home";

    $users =  result();
    //print_r(result());

    include "../resources/views/home.php";
}else {
    echo "ruta no existe";
} */

/**
 * @author ferna <email>
 * posible remplazo a la otra ruta, decime cual te gusta mas.
 * cosas a considerar:
 * hay que validar si el usuario esta registrado o no para que te deje 
 * ir a registrar, y creo que es mejor usar if para eso, pero hay que ver que onda.
 */

switch ($request_url) {
    case '/':
        $users =  result();
        include __DIR__ . "/../resources/views/home.php";

        break;
    case '/registar':
        echo "vista de registrar";

        break;

    default:
        echo "ruta no existe";
        break;
}
