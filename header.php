<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" 
      type="image/png" 
      href="img/favicon.png">

      <!-- Dependencias de Bootstrap. -->
      <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <title>
    BiancoBazaar
  </title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <meta charset="UTF-8">
  <meta name="Description" content="Pagina de compra venta de figuras!">
</head>
<body style="margin: 0;">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">
  <img src="img/logo.png" width="26" height="26" class="d-inline-block align-top" alt="">
  BiancoBazaar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Casa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lista.php">Productos <span class="sr-only">(current)</span></a>
      </li>
      <!-- Si la sesión está iniciada, mostrá botones de administración y de cierre. -->
      <?php if(isset($_SESSION['email'])) { ?>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Administracion</a>
      </li>
      <!-- Para que Erik entre como admin y no tenga que siempre escribir el mismo codigo en la navbar. -->
      <?php if($_SESSION['email'] == "biancoveraerik@gmail.com") {?>
      <li class="nav-item">
        <a class="nav-link" href="view_users.php">Dashboard</a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
      </li>
      <!-- Si la sesión NO está iniciada, mostrá botones de registro y de inicio de sesión. -->
      <?php } else { ?>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Inicia Sesion</a>
      </li>
      <?php } ?>

    </ul>
    <span class="navbar-text">
      <!-- Si iniciaste sesión, muestra tu mail al costado. -->
      <?php if(isset($_SESSION['email'])) { ?>

      <?php
      echo $_SESSION['email'];
      } ?>
    </span>
  </div>
</nav>



</body>
</html>