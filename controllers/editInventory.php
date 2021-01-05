<?php
require('../config/connectionDB.php');

    if(isset($_POST)){

        $id = $_GET['id'];
        $brand = $_POST["brand"];
        $unit = $_POST["unit"];
        $provider = $_POST["provider"];
        $code = $_POST["code"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $vat = $_POST["vat"];
        $weight = $_POST["weight"];

        $sql_edit = 'UPDATE inventory SET brand=? ,unit=?, provider=?, code=?, description=?, price=?, stock=?, vat=?, weight=? WHERE id=?';
        $query_editInventory = $PDO->prepare($sql_edit);
        $query_editInventory->execute([$brand, $unit, $provider, $code, $description, $price, $stock, $vat, $weight, $id]);
    
        header('location: ../table-inventory.php'); 

    }