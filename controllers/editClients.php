<?php
require('../config/connectionDB.php');

if(isset($_POST)){
    
    $id = $_GET['id'];
    $name_client = $_POST['name_client'];
    $lastname = $_POST['lastname'];
    $date_birt = $_POST['date_birt'];
    $cellphone = $_POST['cellphone'];
    $rferences = $_POST['rferences'];
    $address = $_POST['address'];

    $sql_edit = 'UPDATE clients SET name_client=?,lastname=?,date_birth=?,cellphone=?,rferences=?,address=? WHERE id=?';
    $query_editclient = $PDO->prepare($sql_edit);
    $query_editclient->execute([$name_client,$lastname,$date_birt,$cellphone,$rferences,$address, $id]);

    header('location: ../table-clients.php'); 

}


