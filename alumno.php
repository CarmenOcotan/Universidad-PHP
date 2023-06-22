<?php session_start();
$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'proyecto'
);

$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';


$sql = "SELECT id, dni, nombre, correo, direccion, nacimiento, contra FROM alumno WHERE correo='$email'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>

    <script src="https://kit.fontawesome.com/674b7f77f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS de AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">

    <!-- JavaScript de AdminLTE -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>


    <!-- Link de stilos -->
    <link rel="stylesheet" href="./style.css">

</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-list"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <!-- ... Aquí va el formulario de búsqueda ... -->
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="dropdown me">
                    <a class="dropdown-toggle dropdown-admin d-flex ll" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><?php echo utf8_decode($row['nombre']); ?></span>
                    </a>
                    <ul class="dropdown-menu asu2">
                        <li><a href="./perfil.alumno.php" class="dropdown-item"><i class="bi bi-person-circle mr-2"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="../../admin.php"><i class="fa-solid fa-user-tie  mr-2"></i></i>Admin</a></li>
                        <li><a class="dropdown-item text-danger" href="./logout.php"><i class="bi bi-door-open mr-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="./img/logoEscudo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Universidad</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <h5 style="color: #c2c7d0">Alumno</h5>
                        <a href="#" class="d-block"><span><?php echo utf8_decode($row['nombre']); ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-header text-center text-uppercase">menu Alumnos</li>
                        <li class="nav-item">
                            <a href="./links/calificaciones.php" class="nav-link  ">
                                <i class="bi bi-file-earmark-check nav-icon"></i>
                                <p class="ml-2">Ver Calificaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./links/clases.php" class="nav-link ">
                                <i class="bi bi-easel nav-icon"></i>
                                <p class="ml-2">Administra tus Clases</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Contenido principal -->
        <div class="content-wrapper" style="min-height: 657px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 tit">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bienvenido</h5>
                                    <p class="card-text">Seleciona la accion que quieras realizar en las pestañas del menu de las izquierda</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <!-- Footer -->
        <footer class="main-footer">
            <!-- ... Aquí va el contenido del footer ... -->
        </footer>
        <!-- /.footer -->
    </div>
    <!-- /.wrapper -->
</body>

</html>