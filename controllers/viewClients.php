<?php
require('./config/connectionDB.php');

if(isset($_GET)){

    $id = $_GET['id'];

    $sql_view = 'SELECT * FROM clients WHERE id=?';
    $query_viewClients = $PDO->prepare($sql_view);
    $query_viewClients->execute([$id]);
    $result_view = $query_viewClients->fetch();

}