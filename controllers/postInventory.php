<?php
require('../config/connectionDB.php');

    if($_POST){
        
        $brand = $_POST["brand"];
        $unit = $_POST["unit"];
        $provider = $_POST["provider"];
        $code = $_POST["code"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $vat = $_POST["vat"];
        $weight = $_POST["weight"];

        $sql_add = 'INSERT INTO inventory (brand,unit,provider,code,description,price,stock,vat,weight) VALUES ( ?,?,?,?,?,?,?,?,? )';
        $query_formInvetory = $PDO->prepare($sql_add);
        $query_formInvetory->execute([$brand, $unit, $provider, $code, $description, $price, $stock, $vat, $weight]);
        
        header('location: ../table-inventory.php');

    }