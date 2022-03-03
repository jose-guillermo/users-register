<?php
include "../db/conexion_db.php";
$sql = file_get_contents("../sql/create_table_users.sql");
$result = $conexion -> multi_query($sql);
if($result){
    echo "tabla creada con exito";
} 
$conexion->close();