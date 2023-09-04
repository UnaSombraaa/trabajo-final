<?php

include 'bd.php';


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
  <?php include 'header.php'; ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tag</th>
    </tr>
  </thead>
  <?php
        
          $consulta3 = "SELECT * FROM alta_usuarios";
          $result3 = $conexion->query($consulta3);

          while($datos=$result3->fetch_array()){ 
            $id = $datos['id_usuarios'];
            $consulta4 = "SELECT * FROM usuario_tag where id_usuarios = '$id'";
            $result4 = $conexion->query($consulta4);
            while($datos2=$result4->fetch_array()) $tag = $datos2['tag'] ;

            ?>
          
            <tbody>
                <tr>
                <td><?php echo $datos['nombre']; ?></th>
                <td><?php echo $datos['email']; ?></td>
                <td><?php echo $tag; ?></td>
                </tr>
          
         
            
        <?php }  ?>
  </body>
</html>