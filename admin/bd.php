<?php

// make a coneccion to the database in php to phpmyadmin

$servidor="localhost";
$baseDeDatos="veterinaria_frac";
$usuario="root";
$contrasenia="";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    // echo "conexion exitosa";

}catch(Exception $error){
    echo $error->getMessage();
}





?>
