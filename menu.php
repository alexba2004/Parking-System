<?php
session_start();
$idUsuario = $_SESSION['id'];
$nombre = $_SESSION['name'];

if (!isset($_SESSION['loggedin'])) {
  echo '<script language="javascript">alert("Debes de iniciar sesión"); window.location.href="index.php"; </script>';
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <script src="scripts/js/jquery.min.js"></script>
  <script src="scripts/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    /* Estilos personalizados */
    body {
      padding-top: 56px; /* Ajustar según el tamaño de la barra de navegación */
    }
    .navbar-brand img {
      width: 40px; /* Ajustar el tamaño del logo */
    }
    .card {
      margin-top: 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-body {
      padding: 20px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./imagenes/img.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a class="nav-link active" onclick="loadDiv('inicio.php');" aria-current="page"
                href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <span class="nav-link">|</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('registros.php');">Registros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('cajones.php');">Cajones</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" onclick="loadDiv('clientes.php');" href="#">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('vehiculos.php');">Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('tarifas.php');">Tarifas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="loadDiv('servomotor.php');">Servomotor</a>
            </li>
            <li class="nav-item">
              <span class="nav-link">|</span>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Otros
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#" onclick="loadDiv('encargados.php');">Encargados</a></li>
                <li><a class="dropdown-item" href="#" onclick="loadDiv('reportes.php');">Reportes</a></li>
                <li><a class="dropdown-item" href="#" onclick="closeSession();">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5" id="contenido">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body text-center">
            <p class="h4">Bienvenido <b><?php echo $nombre ?></b></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
function loadDiv(page) {
  $.ajax({
    url: page,
    success: function(response) {
      $('#contenido').html(response);
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
}


  </script>
</body>

</html>
