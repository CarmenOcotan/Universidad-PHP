<?php
    session_start(); //Asignación de sesión para cada archivo PHP

    if (isset($_SESSION['email'])){
        header('Location: login.php'); //Redirige a login.php si ya hay una sesión activa
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL); 
        $password = strtolower($_POST['password']);
        $name = $_POST['name'];
        $address = $_POST['adress']; 
        $dni = $_POST['DNI'];
        $date = $_POST['date'];
        $errores = '';

        if (empty($email) || empty($password)){ //Verifica que los campos no estén vacíos
            $errores .= '<div class="alert alert-primary" role="alert">Rellene todos los campos requeridos</div>';
        } else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
            } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
            }

            $statement = $conexion->prepare("SELECT * FROM alumno WHERE correo = :correo LIMIT 1"); 
            $statement->execute(array(':correo' => $email));
            $resultado = $statement->fetch();

            if ($resultado !== false){
                $errores .= '<div class="alert alert-primary" role="alert">El correo ya está registrado</div>';
            }

            if ($errores == ''){
                $statement = $conexion->prepare('INSERT INTO alumno(id, dni, nombre, correo, direccion, nacimiento, contra) VALUES (NULL, :dni, :nombre, :correo, :direccion, :nacimiento, :contra)');
                $statement->execute(array(
                    ':dni' => $dni,
                    ':nombre' => $name,
                    ':correo' => $email,
                    ':direccion' => $address,
                    ':nacimiento' => $date,
                    ':contra' => $password
                ));

                header('Location:login.php');
            }
        }
    }

    require 'register.view.php';
?>