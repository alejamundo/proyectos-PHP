<?php
//conecatr a la bd

$servidor='localhost';//127.0.0.1
$baseDatos='empleados';
$usuario='root';
$contrasena='';

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$contrasena);
} catch (\Throwable $th) {
    echo("Error: ".$th->getMessage());
}


?>