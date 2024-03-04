<?php
session_start();
$idUsuario=$_SESSION['id'];
$nombre=$_SESSION['name'];

if (!isset($_SESSION['loggedin'])) {
  echo '<script language="javascript">alert("Debes de iniciar sesión"); window.location.href="index.php"; </script>';
  exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <script src="scripts/js/funciones.js"></script>
  <script src="scripts/js/jquery.min.js"></script>
  <script src="scripts/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <style>
    /* Estilos para el cuerpo y la barra de navegación */
    body {
      font-family: 'Roboto', sans-serif; /* Fuente principal */
      background-color: #f8f9fa; /* Color de fondo */
    }

    .navbar {
      background-color: #343a40; /* Color de fondo de la barra de navegación */
      padding: 10px 20px; /* Espaciado interno */
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
      position: relative;
    }

    .navbar-brand img {
      max-height: 60px; /* Tamaño máximo del logo */
    }

    .navbar-nav .nav-link {
      color: #ffffff; /* Color del texto de los enlaces */
      font-weight: bold; /* Negrita */
      text-transform: uppercase; /* Convertir texto a mayúsculas */
      transition: 0.3s; /* Transición suave */
    }

    .navbar-nav .nav-link:hover {
      color: #17a2b8; /* Color del texto al pasar el ratón */
    }

    /* Estilos para el contenido */
    #contenido {
      padding-top: 20px; /* Espaciado superior */
    }

    .card {
      background-color: #ffffff; /* Color de fondo */
      border: none; /* Sin borde */
      border-radius: 10px; /* Bordes redondeados */
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
      transition: 0.3s; /* Transición suave */
    }

    .card:hover {
      transform: translateY(-5px); /* Efecto de elevación al pasar el ratón */
    }

    .card-title {
      color: #343a40; /* Color del título */
      font-weight: bold; /* Negrita */
    }

    .card-text {
      color: #6c757d; /* Color del texto */
    }
    
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/menu.php">
        <img src="imagenes/menu.png" alt="Logo" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" onclick="loadDiv('#contenido','inicio.php');" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','registros.php');" href="#">Registros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','cajones.php');" href="#">Cajones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','clientes.php');" href="#">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','vehiculos.php');" href="#">Vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','tarifas.php');" href="#">Tarifas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','servomotor.php');" href="#">Servomotor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','encargados.php');" href="#">Encargados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','reportes.php');" href="#">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','SensorAprox.php');" href="#">SensorAprox</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('#contenido','verLuz.php');" href="#">Luz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="closeSession ();" href="#">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
  <div id="contenido" class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">¡Bienvenido <?php echo $nombre; ?>!</h5>
            <p class="card-text">Gracias por usar el sistema del estacionamiento.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
