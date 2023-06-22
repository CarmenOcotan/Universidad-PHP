<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="./img/logoUni.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link de Fontawesome -->
    <script src="https://kit.fontawesome.com/674b7f77f6.js" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/674b7f77f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Links de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Link de stilos -->
    <link rel="stylesheet" href="./style.css">

    <title>Login</title>
</head>

<body>
    <div class="d-flex flex-column align-items-center vh-100 contenedor-principal">
        <div class="mb-3">
            <img class="logo" src="./img/logoUni.jpg" alt="logo">
        </div>
        <form class="form_container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
            <div class="title_container">
                <p class="title">No tienes una cuenta Registrate</p>
            </div>
            <div class="input-group mb-3">
                <input name="DNI" type="text" class="form-control" placeholder="DNI">                                    
                <span class="input-group-text"><i class="fa-solid fa-passport"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Nombre">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="adress" type="text" class="form-control" placeholder="Dirreccion">
                <span class="input-group-text"><i class="fa-solid fa-address-book"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="date" type="date" class="form-control fecha" placeholder="Fecha de Nacimiento">
            </div>
            <div class="input-group mb-3">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            </div>
            <div class="input-group mb-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            </div>
            <div class="d-flex justify-content-between w-100">
                <a class="registro" href="login.php"><i class="bi bi-arrow-bar-left"></i>Back</a>
                <button type="button" class="btn btn-primary" value="Start" onclick="login.submit()">Registrar</button>
            </div>
            <?php
            if (!empty($errores)) {
                echo $errores;
            }
            ?>
        </form>
    </div>
</body>

</html>