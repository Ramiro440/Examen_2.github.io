<?php
  require_once "conexion.php";

  $city = $_POST ["city"]; 


  $consulta = "SELECT * FROM usuarios WHERE city = '$city'";
  $resultado = mysqli_query ($conex, $consulta);
  $registros = mysqli_num_rows($resultado);

  
  if ($registros > 0) {
    echo "Vives en" . $city;
  }
  else {
    echo "Usuario incorrecto";
  }

?>