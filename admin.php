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

<?php
include "./view/head/head.php";
?>
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
                        Administrador
                    </a>
                    <ul class="dropdown-menu asu2">
                        <li><a href="./perfil.alumno.php" class="dropdown-item"><i class="bi bi-person-circle mr-2"></i> Perfil</a></li>
                        <li><a class="dropdown-item text-danger" href="./logout.php"><i class="bi bi-door-open mr-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="./img/logoEscudo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Universidad</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <h5 style="color: #c2c7d0">admin</h5>
                        <a href="#" class="d-block">Administrador</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-header text-center text-uppercase">menu Administración</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-person-fill-gear nav-icon"></i>
                                <p class="ml-2">Permisos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./view/users/maestros.php" class="nav-link ">
                                <i class="bi bi-person-workspace nav-icon"></i>
                                <p class="ml-2">Maestros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./view/users/alumnos.php" class="nav-link ">
                                <i class="bi bi-mortarboard-fill nav-icon"></i>
                                <p class="ml-2">Alumnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="bi bi-easel2 nav-icon"></i>
                                <p class="ml-2">Clases</p>
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