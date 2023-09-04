
<!DOCTYPE>
<html>
<head>
  <title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php  include 'bd.php';
include 'header.php';

?>
<br>
<div class="row text-center mx-auto ">
      <div class="col-lg-4 mx-auto p-3 ">
        <div class="card mb-4  ">
          <div class="card-body text-center">
            <?php
           
            $email = $_COOKIE["sesion"];
            $consulta= "SELECT * FROM alta_usuarios WHERE email='$email'";
            $result = $conexion->query($consulta);
          
            while($datos=$result->fetch_array()){

              $nombre=$datos['nombre'];
              $contrasena=$datos['contrasena'];
              $create_time=$datos['create_time'];

            }?>
            <img src="img/usuario.jpg" alt="usuario" class="rounded-circle img-fluid mb-3" style="width: 200px;">
            <p name="nombre" class="text-muted mb-2"><?php echo $nombre; ?></p>
            <p name="email" class="text-muted mb-2"><?php echo $email; ?></p>
            <p name="contrasena" class="text-muted mb-2"><?php echo $contrasena; ?></p>
            <p name="create_time" class="text-muted mb-2"><?php echo $create_time; ?></p>
            <br>
            <div class="d-flex justify-content-center mb-4">
              <a href="header.php" role="button" class="btn btn-dark col-2 mb-2">Inicio</a>
            </div>

           

          </div>
        </div>
<body>
</html>