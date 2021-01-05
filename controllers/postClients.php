<?php
require('../config/connectionDB.php');

    if($_POST){

        $name_client = $_POST["name_client"];
        $lastname = $_POST["lastname"];
        $date_birth = $_POST["date_birth"];
        $cellphone = $_POST["cellphone"];
        $rferences = $_POST["rferences"];
        $address = $_POST["address"];

        $sql_add = 'INSERT INTO clients (name_client, lastname, date_birth, cellphone, rferences, address) VALUES ( ?,?,?,?,?,? )';
        $query_formClient = $PDO->prepare($sql_add);
        $query_formClient->execute([$name_client, $lastname, $date_birth, $cellphone, $rferences, $address]);

        header('location: ../table-clients.php');

    }