<?php

include 'bd.php';
if (isset($_COOKIE['sesion'])) {
  header('Location: header.php');
}

if (isset($_POST['nombre'])) $nombre = $_POST['nombre'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['contrasena'])) $contrasena = $_POST['contrasena'];
if (isset($_POST['create_time'])) $create_time = $_POST ['create_time'];

$create_time = date('y/m/d');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$consulta = "INSERT INTO alta_usuarios (nombre, email, contrasena,create_time ) VALUES ('$nombre','$email','$contrasena','$create_time')";
$result = $conexion->query($consulta);
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form action="formuser.php" method="POST">
        Nombre <input name="nombre" type="text" required><br>
        Email <input name="email" type="email" required><br>
        Contraseña <input name="contrasena" type="password" required><br>
        <input type="submit" class="boton" name="register" value="Registrar">
    </form>
   
  </body>
</html>
