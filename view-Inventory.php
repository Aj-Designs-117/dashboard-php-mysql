<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Datos</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
    <h2 class="container-card__title">Registro de ingredientes</h2>
        <div  class="form">
        <?php include_once 'controllers/viewInventory.php' ?>
            <div class="form__input-groups">
                <span class="form__description">Marca</span>
                <input type="text" class="form__input" placeholder="Escriba la marca" value="<?php echo $result_view['brand']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Unidad</span>
                <input type="text" class="form__input" placeholder="Escriba la unidad" value="<?php echo $result_view['unit']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Proveedor</span>
                <input type="text" class="form__input" placeholder="Escriba el proveedor" value="<?php echo $result_view['provider']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Codigo del producto</span>
                <input type="text" class="form__input" placeholder="Escriba el codigo" value="<?php echo $result_view['code']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Descripcion</span>
                <input type="text" class="form__input" placeholder="Escriba la descripcion" value="<?php echo $result_view['description']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Precio del producto</span>
                <input type="text" class="form__input" placeholder="Escriba el precio" value="<?php echo $result_view['price']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Stock</span>
                <input type="text" class="form__input" placeholder="Escriba el stock" value="<?php echo $result_view['stock']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">IVA</span>
                <input type="text" class="form__input" placeholder="Escriba el IVA" value="<?php echo $result_view['vat']; ?>" disabled>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Peso del producto</span>
                <input type="text" class="form__input" placeholder="Escriba el peso" value="<?php echo $result_view['weight']; ?>" disabled>
            </div>
        </div>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>