<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Ingredientes</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
    <h2 class="container-card__title">Registro de ingredientes</h2>
       <form action="#" method="POST" autocomplete="off" class="form">
            <div class="form__input-groups">
                <span class="form__description">Cantidad de bolsas de harina</span>
                <input type="text" name="flour" class="form__input" placeholder="Escriba la cantidad" index="1">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Cantidad de vegentales</span>
                <input type="text" name="vegetables" class="form__input" placeholder="Escriba la cantidad" index="2">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Cantidad de carner frias</span>
                <input type="text" name="cold_meats" class="form__input" placeholder="Escriba la cantidad" index="3">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Cantidad de empaquetados</span>
                <input type="text" name="packaged" class="form__input" placeholder="Escriba la cantidad" index="4">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Fecha de entrega</span>
                <input type="date" name="delivery_date" class="form__input" placeholder="Escriba la cantidad" index="4">
            </div>
            <button class="form__btn" type="submit">Agregar</button>     
       </form>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>