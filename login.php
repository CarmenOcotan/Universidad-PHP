<?php

    session_start(); //Asignacion de sesion para cada arcchivo php
    if (isset($_SESSION['email'])){
        header('Location:index.php');//Redireccionar archivos de php
    }
    $errores=''; //guarda los errores del codigo
    if ($_SERVER['REQUEST_METHOD']=='POST'){//estamos consultando si el metodo POST ==
        $email=$_POST['email'];//sacamos el valor del campo email y pass por medio del metodo post.
        $password=$_POST['password'];
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');//conexion a mi base de datos
        }catch(PDOException $e){
            echo "error: " . $e->getMessage();
        }
        $stateman = $conexion->prepare('SELECT * FROM alumno WHERE correo=:email AND contra =:password');//Colsultando la Database
        $stateman->execute(array(':email' => $email, ':password' => $password));
        $resultado = $stateman->fetch();
        if($resultado!==false){
            $_SESSION['email'] = $email;
            header('Location:alumno.php');
        }else{
            $errores .='<div class="alert alert-primary" roles="alert">Correo invalido o Erroneo</div>';
        }

    }
    require 'login.view.php'
?>