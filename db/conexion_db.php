<?php
include "db/datos_conexion.php";
$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion -> connect_error){
    echo "No se ha podido conectar con la base de datos";
}