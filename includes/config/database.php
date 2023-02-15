<?php 

function conectarDB() : mysqli  {
    // El servidor, el usuario, contraseña y el nombre de la base de datos 
    $servername = "localhost";
    $username = "root";
    $password = "Vedoya771109";
    $dbname = "ditsa";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}?>
