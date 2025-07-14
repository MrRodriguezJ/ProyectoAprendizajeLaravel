<?php

$host="localhost";
$user="root";
$password="";
$db="perfilapp";

$conexion= new mysqli($host,$user,$password,$db);

if($conexion->connect_error){
    die ("conexion no establecida". $conexion->connect_error);
}

header("Content-Type: application/json");
$method= $_SERVER['REQUEST_METHOD'];
print_r($method);


?>