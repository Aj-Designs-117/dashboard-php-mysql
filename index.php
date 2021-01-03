<?php include('includes/header.php') ?>
<section class="container" id="dashboard">
  <div class="main-home__nav">
    <h1 class="main-home__title">Dashboard</h1>
    <?php include 'helpers/session.php' ?>
  </div>
  
  <div class="main-home__content">
    <article class="main-home__card">
      <h2 class="main-home__card-title">Total de clientes</h2>
      <div class="main-home__card-body">
        <i class="fas fa-database main-home__card-icon-clients"></i>
        <h3 class="main-home__clients">2000</h3>
      </div>
    </article>
    <article class="main-home__card">
      <h2 class="main-home__card-title">Stock productos</h2>
      <div class="main-home__card-body">
        <i class="fas fa-dolly-flatbed main-home__card-icon-low"></i>
        <h3 class="main-home__clients">200</h3>
      </div>
    </article>
  </div>
  <footer class="footer">
    <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
  </footer>
</section>
<?php include('includes/footer.php') ?>

