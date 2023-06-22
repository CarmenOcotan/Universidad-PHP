<?php

$host = "localhost";
$password = "";
$user = "root";
$database = "proyecto";

$conexion = new mysqli($host, $user, $password, $database);

if (!$conexion) {
    echo 'Conexion fallida';
}

