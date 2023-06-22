<?php
session_start();
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto');
// Consulta SQL para obtener los datos de la tabla "alumno"
$sql = "SELECT * FROM alumno";
$result = $conexion->query($sql);
$usuarios = "Alumno";
// Verificar si la consulta tuvo éxito
if ($result === false) {
    die("Error en la consulta: " . $conexion->error);
}

// Crear un array para almacenar los datos de los alumnos
$alumnos = array();

// Recorrer los resultados de la consulta y agregar los datos al array de alumnos
while ($row = $result->fetch_assoc()) {
    $alumnos[] = $row;
}

// Cerrar el resultado y la conexión a la base de datoss
$result->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad</title>

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
    <link rel="stylesheet" href="../../style.css">

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
                    <a href="../../admin.php" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="dropdown me">
                    <a class="dropdown-toggle dropdown-admin d-flex ll" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Administrador
                    </a>
                    <ul class="dropdown-menu asu2">
                        <li><a class="dropdown-item text-danger" href="./view/logout.php"><i class="bi bi-door-open mr-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../../img/logoEscudo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <a href="./maestros.php" class="nav-link ">
                                <i class="bi bi-person-workspace nav-icon"></i>
                                <p class="ml-2">Maestros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Lista de <?= $usuarios ?>s</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../admin.php">Home</a></li>
                                <li class="breadcrumb-item active"><?= $usuarios ?>s</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row justify-content-between">
                                        <h3 class="card-title d-flex align-items-center">Información de <?= $usuarios ?>s</h3>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Agregar<?= $usuarios ?></button>
                                    </div>
                                    <div class="modal fade" id="exampleModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">Agregar <?= $usuarios ?></h1>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div id="modalUpdateBody" class="modal-body">
                                                    <form action="../../conf/insertDatos.php" method="POST">
                                                        <input type="hidden" name="id">
                                                        <div class="mb-3">
                                                            <label for="DNI" class="form-label">DNI</label>
                                                            <input type="text" class="form-control" name="DNI" placeholder="Ingresa DNI">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Correo Electrónico</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Ingresa email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Nombre(s)</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="address" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" name="address" placeholder="Ingresa la dirección">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">Fecha de nacimiento</label>
                                                            <input type="date" class="form-control" name="date" placeholder="Ingresa fecha de nacimiento">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Ingresar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tablaMaster" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Dirección</th>
                                                <th>Fec. de Nacimiento</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $x = 1;
                                            foreach ($alumnos as $maestro) {
                                                // Remove the if condition that checks for "active" key
                                            ?>
                                                <tr>

                                                    <td><?= $maestro["id"] ?></td>
                                                    <td><?= $maestro["dni"] ?></td>
                                                    <td><?= $maestro["nombre"] ?></td>
                                                    <td><?= $maestro["correo"] ?></td>
                                                    <td><?= $maestro["direccion"] ?></td>
                                                    <td><?= $maestro["nacimiento"] ?></td>
                                                    <td class="text-center">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#examp<?php echo $maestro['id'] ?>" class="text-info mx-2">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <div class="modal fade" id="examp<?php echo $maestro['id'] ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5">Editar <?= $usuarios ?></h1>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div id="modalUpdateBody" class="modal-body">
                                                                        <form action="../../conf/editarDatos.php" method="POST">
                                                                            <input type="hidden" name="id" value="<?= $maestro["id"] ?>">
                                                                            <div class="mb-3">
                                                                                <label for="DNI" class="form-label">DNI</label>
                                                                                <input type="text" class="form-control" name="DNI" placeholder="Ingresa DNI" value="<?= $maestro["dni"] ?>" readonly>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="email" class="form-label">Correo Electrónico</label>
                                                                                <input type="email" class="form-control" name="email" placeholder="Ingresa email" value="<?= $maestro["correo"] ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="name" class="form-label">Nombre(s)</label>
                                                                                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" value="<?= $maestro["nombre"] ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="address" class="form-label">Dirección</label>
                                                                                <input type="text" class="form-control" name="address" placeholder="Ingresa la dirección" value="<?= $maestro["direccion"] ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="date" class="form-label">Fecha de nacimiento</label>
                                                                                <input type="date" class="form-control" name="date" placeholder="Ingresa fecha de nacimiento" value="<?= $maestro["nacimiento"] ?>" required>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="../../conf/eliminarDatos.php?id=<?php echo $maestro['id'] ?>" class="text-danger mx-2"><i class="bi bi-trash3-fill"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $x++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Modal -->
        <!-- Modal -->
    </div>
    <!-- /.control-sidebar -->

    <?php
    include "../head/footer.php";
    ?>