<?php
include 'bd.php';



if (isset($_COOKIE['sesion'])) {
    header('Location: header.php');
  }
  
  if (isset($_POST['nombre'])) $nombre = $_POST['nombre'];
  if (isset($_POST['email'])) $email = $_POST['email'];
  if (isset($_POST['contrasena'])) $contrasena = $_POST['contrasena'];
  if (isset($_POST['codadmin'])) $codadmin = $_POST ['codadmin'];
  
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($codadmin == "3323") {
      $consulta = "INSERT INTO alta_usuarios (nombre, email, contrasena ) VALUES ('ADMIN','$email','$contrasena')";
      $result = $conexion->query($consulta);
      setcookie('sesion', $email, time() + (86400 * 30) * 360, "/");
      header("location: header.php");
    }else{
      $msg = '<div class="alert alert-danger" role="alert">
              <a class="alert-link">
              Codigo incorrecto de administrador
              </a>
              </div>';
    }

  }


  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form action="formadmin.php" method="POST">
        Nombre <input name="nombre" type="text"><br>
        Email <input name="email" type="email"><br>
        Contraseña <input name="contrasena" type="password"><br>
        Codigo Administrador<input name="codadmin" type="text"><br>
        <input class="boton" type="submit" name="register" value="Registrar">
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){ ?>
          <p><?php echo $msg; ?></p>
          <?php } ?>
    </form>
   
  </body>
</html>
