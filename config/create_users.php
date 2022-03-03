<?php
include "../db/conexion_db.php";
$sql = file_get_contents("../sql/create_users.sql");
$result = $conexion -> query($sql);
if($result){
    echo "registros insertados con exito";
} 
$conexion->close();