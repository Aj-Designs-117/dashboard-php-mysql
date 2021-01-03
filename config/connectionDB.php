<?php

$credential = "mysql:host=localhost;dbname=ctrl_escolar";
$user = 'root';
$key = null;

    try{

        $PDO = new PDO($credential,$user,$key);

        // echo "Conectado </br>";


    }catch(PDOException $e){
        print "Error!" . $e->getMessage() . "</br>";
    }