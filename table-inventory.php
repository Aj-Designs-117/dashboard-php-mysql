<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Ingredientes</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card"> 
    <div class="container-card__header">
            <h2 class="container-card__title">Listado de ingredientes</h2>
            <form action="table-inventory.php" method="POST" autocomplete="off">
                <input type="search" name="search" class="form__input" placeholder="Buscar">
                <button class="container-card__btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="table">
            <table class="table__content">
                <thead>
                    <tr>
                        <th class="table__title">ID</th>
                        <th class="table__title">Marca</th>
                        <th class="table__title">Descripcion</th>
                        <th class="table__title">Unidad</th>
                        <th class="table__title">Precio</th>
                        <th class="table__title">Stock</th>
                        <th class="table__title">Fecha</th>
                        <th class="table__title">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once 'controllers/getInventory.php'; ?>
                    <?php foreach($res as $data): ?>
                        <tr class="table__row">
                            <td class="table__col"><?php echo $data['id']; ?></td>
                            <td class="table__col"><?php echo $data['brand']; ?></td>
                            <td class="table__col"><?php echo $data['description']; ?></td>
                            <td class="table__col"><?php echo $data['unit']; ?></td>
                            <td class="table__col"><i class="fas fa-dollar-sign"></i> <?php echo $data['price']; ?></td>
                            <td class="table__col"><i class="fas fa-boxes"></i> <?php echo $data['stock']; ?></td>
                            <td class="table__col"><?php echo $data['created_at']; ?></td>
                            <td class="table__col">
                                <a href="view-Inventory.php?id=<?php echo $data['id']; ?>" class="table__btn table__success"><i class="fas fa-eye"></i></a>
                                <a href="edit-inventory.php?id=<?php echo $data['id']; ?>" class="table__btn table__warning"><i class="fas fa-edit"></i></a>
                                <a href="controllers/deleteInventory.php?id=<?php echo $data['id']; ?>" class="table__btn table__danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="footer">
        <small>© 2020, Designed by <span class="footer__subtitle">STR SOLUCIONES</span>.</small>
    </footer>
</section>
<?php include('includes/footer.php') ?>