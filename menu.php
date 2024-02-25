<?php
session_start();
$idUsuario = $_SESSION['id'];
$nombre = $_SESSION['name'];

if(!isset($_SESSION['loggedin'])){
    echo '<script language="javascript">alert("Tienes que acceder con tu usuario y contraseña"); location.href="index.php"</script>';
    exit;
}
include 'conexion.php';
$query="SELECT usuario FROM empleados";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <script src="scripts/js/funciones.js"></script>
    <script src="scripts/js/jquery.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!--Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Icono-->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Parking System</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-1">

            <!-- Heading -->
            <div class="sidebar-heading">
                Inicio
            </div>

            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','servo.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-engine fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Servo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','dashboard.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-address-card fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Registro</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','cajon.php');" aria-current="page" href="#">
                    <i class="fas fa-splotch fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Cajones</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','cliente.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Clientes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','vehiculos.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-car fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Vehiculos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','tarifas.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-coins fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Tarifas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','empleados.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-briefcase fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Encargados</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-1">


            <li class="nav-item">
                <a class="nav-link active" onclick="cargarDiv('#contenido','reportes.php');" aria-current="page"
                    href="#">
                    <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Reportes</span></a>
            </li>

            <hr class="sidebar-divider my-1">

            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Salir</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Iconos pequeños -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <!-- Nav Usuario-->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombre ?></span>
                                <i class="fas fa-laugh-wink "></i>
                            </a>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid" id="contenido">
                    <!-- Aqui carga todo el contenido de los formularios -->

                </div>


                
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

              
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                
                <script src="js/sb-admin-2.min.js"></script>

</body>

</html>