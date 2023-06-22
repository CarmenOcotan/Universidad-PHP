<?php 
include ("../conf/conexion.php");


$dni = $_POST['DNI'];
$nombre= $_POST['name'];
$direccion = $_POST['address'];
$nacimiento = $_POST['date'];
$correo = $_POST['email'];
$id = $_POST['id'];


$sql = "INSERT INTO alumno (id, dni, nombre, correo, direccion, nacimiento) VALUES (NULL, '$dni','$nombre','$correo','$direccion','$nacimiento')";

$resultado = mysqli_query($conexion, $sql);


if ($resultado === TRUE){
    header("location: ../view/users/maestros.php");
    
} else {
    echo "Datos no insertados";
}


?>
