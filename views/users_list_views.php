<table class="table table-primary table-bordered border-dark">
    <tr>
        <th>ID</th>
        <th>Nombre de usuario</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Estado</th>
        <th>Fecha de creación</th>
        <th>Fecha de actualización</th>
    </tr>
<?php

use LDAP\Result;

for ($i = 0; $i < $result->num_rows; $i++) {
    $id =               $filas[$i]["user_id"];
    $name =             $filas[$i]["user_name"];
    $email =            $filas[$i]["user_email"];
    $password =         $filas[$i]["user_password"];
    $state =            $filas[$i]["user_state"];
    $time_created =     $filas[$i]["user_time_created"];
    $time_updated =     $filas[$i]["user_time_updated"];
    echo "<tr>";
    echo "<td> $id </td>";
    echo "<td> $name </td>";
    echo "<td> $email </td>";
    echo "<td> $password </td>";
    echo "<td> $state </td>";
    echo "<td> $time_created </td>";
    echo "<td> $time_updated </td>";
    echo "</tr>";
}
?>
</table>