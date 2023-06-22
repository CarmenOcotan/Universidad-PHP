<?php
    session_start(); 
        if(isset($_SESSION['email'])){
            header('Location:admin.php'); //Redirecciona archivos php
        } else {
            header('Location:register.php');
        }
?>