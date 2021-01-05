<?php
require("./config/connectionDB.php");

    //TOTAL DE CLIENTES EN LA BASE DE DATOS

    $sql_read = "SELECT COUNT(*) AS clients_count FROM clients";
    $query_countClients = $PDO->prepare($sql_read);
    $query_countClients->execute();
    $res_clients = $query_countClients->fetchColumn();

    //TOTAL DE PRODUCTOS EN LA BASE DE DATOS

    $sql_read = "SELECT COUNT(*) AS clients_products FROM inventory";
    $query_countProducts = $PDO->prepare($sql_read);
    $query_countProducts->execute();
    $res_stock = $query_countProducts->fetchColumn();

    
