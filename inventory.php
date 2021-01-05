<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Ingredientes</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
    <h2 class="container-card__title">Registro de ingredientes</h2>
       <form action="controllers/postInventory.php" method="POST" autocomplete="off" class="form">
            <div class="form__input-groups">
                <span class="form__description">Marca</span>
                <input type="text" name="brand" class="form__input" placeholder="Escriba la marca" index="1">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Unidad</span>
                <select class="form__input" name="unit">
                <option selected>Seleccione la unidad</option>
                    <option value="kilo">Kilo</option>
                    <option value="libra">Libra</option>
                    <option value="bolsa">Bolsa</option>
                    <option value="caja">Caja</option>
                </select>
            </div>
            <div class="form__input-groups">
                <span class="form__description">Proveedor</span>
                <input type="text" name="provider" class="form__input" placeholder="Escriba el proveedor" index="3">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Codigo del producto</span>
                <input type="text" name="code" class="form__input" placeholder="Escriba el codigo" index="4">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Descripcion</span>
                <input type="text" name="description" class="form__input" placeholder="Escriba la descripcion" index="5">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Precio del producto</span>
                <input type="text" name="price" class="form__input" placeholder="Escriba el precio" index="6">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Stock</span>
                <input type="text" name="stock" class="form__input" placeholder="Escriba el stock" index="7">
            </div>
            <div class="form__input-groups">
                <span class="form__description">IVA</span>
                <input type="text" name="vat" class="form__input" placeholder="Escriba el IVA" index="8">
            </div>
            <div class="form__input-groups">
                <span class="form__description">Peso del producto</span>
                <input type="text" name="weight" class="form__input" placeholder="Escriba el peso" index="9">
            </div>
            <button class="form__btn" type="submit">Agregar</button>     
       </form>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>