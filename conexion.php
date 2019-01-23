<?php

try{
$conexion= new PDO ("mysql: host=localhost; dbname=curso_sql", "root", "");

$conexion->exec("SET CHARACTER SET UTF8");

}catch(Exception $e){

	echo "LINEA DE ERRROR" .  $e->getLine();

}



?>