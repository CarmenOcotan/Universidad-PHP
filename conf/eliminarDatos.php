<?php 

include ("../conf/conexion.php");

$Id = $_GET['id'];
$sql = "DELETE FROM alumno WHERE id = '$Id'";


$query = mysqli_query($conexion, $sql);
if($query === TRUE){
    header("location:../view/users/maestros.php");
}else{
    echo "No se puedo eliminar";
}

?>