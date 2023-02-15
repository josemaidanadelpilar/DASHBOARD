<?php 
require 'includes/config/database.php';
$db = conectarDB();

// Verifica si la conexión ha sido exitosa
if (!$db) {
  ("Conexión fallida: " . mysqli_connect_error());
}


$errores = [];
// Cierra la conexión a la base de datos

if($_SERVER['REQUEST_METHOD'] === "POST"){
  // Se estrae las variables del formulario y se le asigna el mismo nombre,  la funcion mysqli_real_escape_string, limpia el imput para evitar que se ingrese codigos maliciosos
  $usuarioInput = mysqli_real_escape_string($db, $_POST['usuario']);
  $passwordInput = mysqli_real_escape_string($db, $_POST['password']);
  if(empty($errores)){
    // Conectar a la base de datos 
    $query = "SELECT * FROM users";

    //Obtener resultado 
    $resultado = mysqli_query($db, $query);

    // Revisar si la consulta a la base de datos a devuelto algo 
    if($resultado->num_rows){
      // Recien una vez comprado si devuelve algo se hace el fetch 
      $usuarioDB = mysqli_fetch_assoc($resultado);

      //En caso de que la contraseña no este hasheada en la base de datos lo hashea para poder haceptar php 
      $passwordHash = password_hash($usuarioDB['password'], PASSWORD_DEFAULT);
      // Verificar si el password es correcto 
      $userAuntenticado  = password_verify($passwordInput, $passwordHash);
      if($userAuntenticado &&  $usuarioDB['username'] === $_POST['usuario']){
        // Autenticar al usuario 
        session_start();
        $_SESSION['usuario'] = $usuarioDB['username'];
        $_SESSION['login'] = true;
        header('Location: /panel');
      }else{
        $errores[] = "Contraseña o usuario incorrecto.";
      }
    }

  }
}else{
  
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Open+Sans:wght@300;400;700;800&family=Playfair+Display&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Desarrollo IT SA</title>
</head>
<body>
<main  class="contenedor contendor-formulario">
        <img class="logo" src="https://res.cloudinary.com/dpikphrtb/image/upload/v1676161822/descarga_wyp5u8.png" alt="Logo ditsa">
        <h1 class="titulo" >Iniciar Sesíon</h1>

        <form method="POST" action="" class="formulario ">
        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
         <?php endforeach; ?>
        <fieldset>
                <?php $usuarioInput=""?>
                
                <legend class="legend">Ingresa los datos</legend>
                <label for="usuario">USUARIO</label>
                <input type="text" name="usuario" placeholder="Ingresa tu Usuario" id="usuario" required value="<?php echo $usuarioInput ?>">

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu Contraseña" id="password" required>
            </fieldset>
            <input class="boton boton-verde" type="submit" value="Iniciar Sesíon" >
        </form>
    </main>
</body>
</html>
<!-- Cerrar la base de datos -->
<?php mysqli_close($db);?>
