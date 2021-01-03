<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Datos</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
        <h2 class="container-card__title">Datos del cliente</h2>
            <div  class="form">
            <?php include_once 'controllers/viewClients.php'; ?>
                <div class="form__input-groups">
                    <span class="form__description">Nombre</span>
                    <input type="text" class="form__input" value="<?php echo $result_view['name_client']; ?>" disabled>
                </div>
                <div class="form__input-groups">
                    <span class="form__description">Apellido</span>
                    <input type="text" class="form__input" value="<?php echo $result_view['lastname']; ?>" disabled>
                </div>
                <div class="form__input-groups">
                    <span class="form__description">Fecha de nacimiento</span>
                    <input type="text" class="form__input" value="<?php echo $result_view['date_birth']; ?>" disabled>
                </div>
                <div class="form__input-groups">
                    <span class="form__description">Numero de telefono</span>
                    <input type="text" class="form__input" value="<?php echo $result_view['cellphone']; ?>" disabled>
                </div>
                <div class="form__input-groups">
                    <span class="form__description">Referencias</span>
                    <input type="text" class="form__input" value="<?php echo $result_view['rferences']; ?>" disabled>
                </div>
                <div class="form__input-groups">
                    <span class="form__description">Direccion</span>
                    <textarea cols="50"  rows="5" class="form__input--textarea" disabled><?php echo $result_view['address']; ?></textarea>
                </div> 
            </div>   
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>