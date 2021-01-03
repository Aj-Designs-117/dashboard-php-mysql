<?php
require('../config/connectionDB.php');

    if(isset($_GET)){
        $id = $_GET['id'];

        $sql_delete = 'DELETE FROM clients WHERE id=?';
        $query_deleteClients = $PDO->prepare($sql_delete);
        $query_deleteClients->execute([$id]);
        
        header('location: ../table-clients.php');
    }