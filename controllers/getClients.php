<?php
require("./config/connectionDB.php");


    if(isset($_POST['submit'])){

        $search = isset($_POST["search"]);
        $filter = isset($_POST["filter"]);

        $sql_search = "SELECT * FROM clients WHERE . $filter . LIKE '% ".$search." %' ";
        $query_clients = $PDO->prepare($sql_read);
        $query_clients->execute();
        $res = $query_clients->fetchAll();

    }else{

        $sql_read = "SELECT * FROM clients";
        $query_clients = $PDO->prepare($sql_read);
        $query_clients->execute();
        $res = $query_clients->fetchAll();

    }

