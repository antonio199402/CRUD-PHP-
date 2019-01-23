<?php

include ("conexion.php");




$borrar=$_GET["id"];

$consulta="DELETE FROM DATOS_USUARIOS WHERE ID='$borrar'";

$resultados=$conexion->query($consulta);



/*$conexion->query("DELETE FROM DATOS_USUARIOS WHERE ID='$borrar'");*/

header("location:index.php");



?>