<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Ingredientes</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card"> 
    <div class="container-card__header">
            <h2 class="container-card__title">Listado de ingredientes</h2>
            <form action="#">
                <input type="search" name="search" class="form__input" placeholder="Buscar">
                <button class="container-card__btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="table">
            <table class="table__content">
                <thead>
                    <tr>
                        <th class="table__title">ID</th>
                        <th class="table__title">Stock harina</th>
                        <th class="table__title">Stock vegetales</th>
                        <th class="table__title">Stock carnes frias</th>
                        <th class="table__title">Stock de empquetados</th>
                        <th class="table__title">Fecha de entrega</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table__row">
                        <td class="table__col">22</td>
                        <td class="table__col">230 <span>Bolsas</span></td>
                        <td class="table__col">200 <span>Cajas</span></td>
                        <td class="table__col">300 <span>Kg</span></td>
                        <td class="table__col">500 <span>Cajas</span></td>
                        <td class="table__col">
                            <a href="edit-clients.php" class="table__btn table__warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="table__btn table__danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>