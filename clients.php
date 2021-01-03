<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Alta</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <div class="container-card">
       <h2 class="container-card__title">Registro del cliente</h2>
       <form action="#" method="POST" autocomplete="off" class="form">
            <div class="form__input-groups">
                <span class="form__description">Escribe el nombre</span>
                <input type="text" name="name" class="form__input" placeholder="Escriba el nombre" index="1">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escribe el apellido</span>
                <input type="text" name="last-name" class="form__input" placeholder="Escriba el apellido" index="2">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escriba la fecha de nacimiento</span>
                <input type="date" name="date_birth" class="form__input" placeholder="Escriba la fecha de nacimiento" index="3">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escribe el numero de telefono</span>
                <input type="text" name="num_cel" class="form__input" placeholder="Escriba el numero telefono" index="4">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Referencias</span>
                <input type="text" name="references" class="form__input" placeholder="Escriba las referencias" index="5">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Escriba la direccion</span>
                <textarea name="domicilio" cols="50"  rows="5" class="form__input--textarea" index="6"></textarea>
            </div>
            <button class="form__btn" type="submit">Agregar</button>     
       </form>
    </div>

    <footer class="footer">
     <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>