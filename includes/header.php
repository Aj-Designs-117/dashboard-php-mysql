<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STR</title>
    <!-- LINK -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/app.css" />
</head>
<body>
  <header class="main-header">
    <nav class="main-nav">
      <div class="main-menu__profile">
        <img src="assets/man.png" alt="IMG-PROFILE" class="main-menu__img-profile" />
        <?php session_start(); if(isset($_SESSION['Admin'])): ?>
          <p class="main-menu__name-profile"><?php echo  $_SESSION['Admin']; ?></p>
         <?php else: ?> <?php  header('location:login.php'); ?> <?php endif ?> 
      </div>
      <ul class="main-menu">
        <li class="main-menu__item">
          <a href="index.php" class="main-menu__link">
            <i class="fab fa-pied-piper-square main-menu__icon-link"></i>
            <p >Dashboard</p>
          </a>
        </li>
        <li class="main-menu__item">
          <a href="clients.php" class="main-menu__link">
            <i class="fas fa-users main-menu__icon-link"></i>
            <p>Alta Clientes</p>
          </a>
        </li>
        <li class="main-menu__item">
          <a href="table-clients.php" class="main-menu__link">
            <i class="fas fa-users main-menu__icon-link"></i>
            <p>Lista de Clientes</p>
          </a>
        </li>
        <li class="main-menu__item">
          <a href="inventory.php" class="main-menu__link">
            <i class="fas fa-cloud-meatball main-menu__icon-link"></i>
            <p>ingredientes</p>
          </a>
        </li>
        <li class="main-menu__item">
          <a href="table-inventory.php" class="main-menu__link">
            <i class="fas fa-dolly-flatbed main-menu__icon-link"></i>
            <p>Inventario</p>
          </a>
        </li>
      </ul>
  </nav>