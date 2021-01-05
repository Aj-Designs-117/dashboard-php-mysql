<?php
require('../config/connectionDB.php');

    if(isset($_GET)){
        $id = $_GET['id'];

        $sql_delete = 'DELETE FROM inventory WHERE id=?';
        $query_deleteInventory = $PDO->prepare($sql_delete);
        $query_deleteInventory->execute([$id]);
        
        header('location: ../table-inventory.php');
    }