<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Editar</h1>    
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
       <h2 class="container-card__title">Editar cliente</h2>
       <form action="controllers/editClients.php?id=<?php echo $_GET['id'] ?>" method="POST" autocomplete="off" class="form">
          <?php include_once 'controllers/viewClients.php';?>
            <div class="form__input-groups">
                <span class="form__description">Escribe el nombre</span>
                <input type="text" name="name_client" class="form__input" placeholder="Escriba el nombre" index="1" value="<?php echo $result_view['name_client']; ?>">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escribe el apellido</span>
                <input type="text" name="lastname" class="form__input" placeholder="Escriba el apellido" index="2" value="<?php echo $result_view['lastname']; ?>">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escriba la fecha de nacimiento</span>
                <input type="date" name="date_birt" class="form__input" placeholder="Escriba la fecha de nacimiento" index="3" value="<?php echo $result_view['date_birth']; ?>">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escribe el numero de telefono</span>
                <input type="text" name="cellphone" class="form__input" placeholder="Escriba el numero telefono" index="4" value="<?php echo $result_view['cellphone']; ?>">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Referencias</span>
                <input type="text" name="rferences" class="form__input" placeholder="Escriba las referencias" index="5" value="<?php echo $result_view['rferences']; ?>">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escriba la direccion</span>
                <textarea name="address" cols="50"  rows="5" class="form__input--textarea" index="6"><?php echo $result_view['address']; ?></textarea>
            </div>
            <button class="form__btn" type="submit">Guardar</button>     
       </form>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>