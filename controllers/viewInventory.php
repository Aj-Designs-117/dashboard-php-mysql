<?php
require('./config/connectionDB.php');

if(isset($_GET)){

    $id = $_GET['id'];

    $sql_view = 'SELECT * FROM inventory WHERE id=?';
    $query_viewInventory = $PDO->prepare($sql_view);
    $query_viewInventory->execute([$id]);
    $result_view = $query_viewInventory->fetch();

}
