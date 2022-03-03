<?php
include "db/conexion_db.php";
$sql = file_get_contents("sql/users_list.sql");

$result = $conexion -> query($sql);

while($fila = $result -> fetch_assoc()){
    $filas[] = $fila;
}

include "views/users_list_views.php";
$conexion->close();
