<?php
  $db_host = "localhost";
  $db_nombre = "crud";
  $db_usuario = "root";
  $db_clave = "";

  $conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre) or die ("Problemas al conectar");
              mysqli_select_db($conexion, $db_nombre) or die ("Problemas al conectar con la base de datos");

  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['cantidad'];

  $sql="INSERT INTO productos(nombre, descripcion, cantidad) VALUES ('{$nombre}','{$descripcion}',{$cantidad})";
  $query = mysqli_query($conexion, $sql);

  if ($query) { echo"Datos guardados correctamente"; }
  else { echo "Hubo algún error,"; }
?>
