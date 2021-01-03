<?php


    if(isset($_GET['submit'])){

        require("../config/connectionDB.php");
        $search = $_GET["search"];

        $sql_search = "SELECT * FROM clients WHERE name_client LIKE '%$search' OR lastname LIKE '%$search' OR cellphone LIKE '% $search ' ";
        $query_clients = $PDO->prepare($sql_search);
        $query_clients->execute();
        $res = $query_clients->fetchAll();
    

    }else{

        require("./config/connectionDB.php");
        $sql_read = "SELECT * FROM clients";
        $query_clients = $PDO->prepare($sql_read);
        $query_clients->execute();
        $res = $query_clients->fetchAll();

    }
