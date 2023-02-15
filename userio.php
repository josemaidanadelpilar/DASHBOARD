<?php 
// Importar la conexion 
require 'includes/config/database.php';
$db = conectarDB();
// Crear un email con password 
$email = "sara";
$password = "132456";
// Es para hashear contraseña, usa una extension de 60 caracteres por lo que en la base de datos tiene que ser 60 caracteres
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
if($passwordHash){

}
$query = "INSERT INTO users (username, password) VALUES ('{$email}','{$passwordHash}');";

// echo $query;

// Agregar a la base de datos 

mysqli_query($db, $query);
?>