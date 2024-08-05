<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "entornodigital";

    $conexion = new mysqli($host, $user, $password, $db);

    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

?>