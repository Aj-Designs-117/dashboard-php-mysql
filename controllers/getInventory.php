<?php
require("./config/connectionDB.php");

    if(!isset($_POST["search"])){

        $_POST["search"] = "";
        $search = $_POST["search"];

    }

    $search = $_POST["search"];

    $sql_search = "SELECT * FROM inventory WHERE brand LIKE '%". $search. "%' OR provider LIKE '%". $search ."%' OR code LIKE '%". $search ."%' 
                   OR weight LIKE '%". $search ."%' ";
    $query_inventory = $PDO->prepare($sql_search);
    $query_inventory->execute();
    $res = $query_inventory->fetchAll();
