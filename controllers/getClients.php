<?php
require("./config/connectionDB.php");

    if(!isset($_POST["search"])){

        $_POST["search"] = "";
        $search = $_POST["search"];

    }

    $search = $_POST["search"];

    $sql_search = "SELECT * FROM clients WHERE name_client LIKE '%". $search. "%' OR lastname LIKE '%". $search ."%' OR cellphone LIKE '%". $search ."%' ";
    $query_clients = $PDO->prepare($sql_search);
    $query_clients->execute();
    $res = $query_clients->fetchAll();

    


    
