<?php

$conexion = new mysqli("localhost", "root", "", "base_datos");

if ($conexion->connect_errno) {
  echo "Fallo la conexion " . $conexion->connect_error;
}

?>