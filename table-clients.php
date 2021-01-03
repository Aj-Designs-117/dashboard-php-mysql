<?php include('includes/header.php') ?>
<section class="container">
    <div class="views-nav">
        <h1 class="views-nav__title">Clientes</h1>
        <?php include 'helpers/session.php' ?>
    </div>

    <section class="container-card">
        <div class="container-card__header">
            <h2 class="container-card__title">Listado de Clientes</h2>
            <form action="controllers/getClients.php" method="POST">
                <select class="form__input" name="filter">
                    <option selected>Filtre la busqueda</option>
                    <option value="name">Nombre</option>
                    <option value="lastname">Apellido</option>
                    <option value="cellphone">Telefono</option>
                </select>
                <input type="search" name="search" class="form__input" placeholder="Buscar">
                <button class="container-card__btn" name="submit" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="table">
            <table class="table__content">
                <thead>
                    <tr>
                        <th class="table__title">ID</th>
                        <th class="table__title">Nombre</th>
                        <th class="table__title">Apellido</th>
                        <th class="table__title">Telefono</th>
                        <th class="table__title">Direccion</th>
                        <th class="table__title">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php include 'controllers/getClients.php'; ?>
                  <?php foreach($res as $data): ?>
                    <tr class="table__row">
                        <td class="table__col"><?php echo $data['id']; ?></td>
                        <td class="table__col"><?php echo $data['name_client']; ?></td>
                        <td class="table__col"><?php echo $data['lastname']; ?></td>
                        <td class="table__col"><?php echo $data['cellphone']; ?></td>
                        <td class="table__col"><?php echo $data['address']; ?></td>
                        <td class="table__col">
                            <a href="view-clients.php?id=<?php echo $data['id']; ?>" class="table__btn table__success"><i class="fas fa-eye"></i></a>
                            <a href="edit-clients.php?id=<?php echo $data['id']; ?>" class="table__btn table__warning"><i class="fas fa-edit"></i></a>
                            <a href="controllers/deleteClients.php?id=<?php echo $data['id']; ?>" class="table__btn table__danger"><i class="fas fa-trash-alt"></i></a>
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