<?php
include("../conf/conexion.php");

$dni = $_POST['DNI'];
$nombre = $_POST['name'];
$correo = $_POST['email'];
$direccion = $_POST['address'];
$nacimiento = $_POST['date'];
$id = $_POST['id'];

$sql = "UPDATE alumno SET dni=?, nombre=?, correo=?, direccion=?, nacimiento=? WHERE id=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssssi", $dni, $nombre, $correo, $direccion, $nacimiento, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location: ../view/users/maestros.php");
} else {
    echo "Error al actualizar los datos";
}

$stmt->close();
$conexion->close();
?>
