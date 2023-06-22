<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="./img/logoUni.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link de Fontawesome -->
    <script src="https://kit.fontawesome.com/674b7f77f6.js" crossorigin="anonymous"></script>

    <!-- Links de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Link de stilos -->
    <link rel="stylesheet" href="./style.css">

    <title>Login</title>
</head>

<body>
    <div class="d-flex flex-column align-items-center vh-100 contenedor-principal">
        <div class="dropdown mt-3 boton-info d-none"> <!-- d-lg-block  se le agrega a la clase para mostrarlo solo en pantalla grande-->
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Información Acceso
            </button>
            <div class="dropdown-menu w-100 p-2">
                <p class="d-flex flex-column">
                    <span class="cat">Admin</span>
                    <span>user: admin@admin</span>
                    <span>pass: admin</span>
                </p>
                <p class="d-flex flex-column">
                    <span class="cat">Maestros</span>
                    <span>user: maestro@maestro</span>
                    <span>pass: maestro</span>
                </p>
                <p class="d-flex flex-column">
                    <span class="cat">Alumno</span>
                    <sapn>user: alumno@alumno</sapn>
                    <sapn>pass: alumno</sapn>
                </p>
            </div>
        </div>
        <div class="mb-3">
            <img class="logo" src="./img/logoUni.jpg" alt="logo">
        </div>
        <form class="form_container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
            <div class="title_container">
                <p class="title">Bienvenido ingresa con tu cuenta</p>
            </div>
            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control" placeholder="Email">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            </div>
            <div class="d-flex justify-content-between w-100">
                <a class="registro" href="register.php">Register</a>
                <button type="button" class="btn btn-primary" value="Login" onclick="login.submit()">Ingresar</button>
            </div>
            <?php if (!empty($errores)) {
                echo $errores;
            }
            ?>
        </form>
        <div class="mt-3 d-none p-2 bg-white">  <!-- d-lg-none para la clase si se quiere mostrar en vista movil -->
            <p class="d-flex flex-column">
                <span class="cat">Admin</span>
                <span>user: admin@admin</span>
                <span>pass: admin</span>
            </p>
            <p class="d-flex flex-column">
                <span class="cat">Maestros</span>
                <span>user: maestro@maestro</span>
                <span>pass: maestro</span>
            </p>
            <p class="d-flex flex-column">
                <span class="cat">Alumno</span>
                <sapn>user: alumno@alumno</sapn>
                <sapn>pass: alumno</sapn>
            </p>
        </div>
    </div>
</body>

</html>