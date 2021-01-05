<?php
session_start();

include_once 'connectionDB.php';

    try{

        $name = $_POST['name']; //usuario: ADMINISTRADOR
        $password = $_POST['password']; // password: STRSOLUCIONES  
        //Pega este hash en la columna password: $2y$10$KBWmBNXB/wahLXU4r09dQu5F0PmzQhs/.5mi2oJo7/eNeeQkzw5YS


        //VERIFICACION DE LA EXISTENCIA DEL USUARIO
        $sql_users = 'SELECT * FROM users WHERE name = ?';
        $query_users = $PDO->prepare($sql_users);
        $query_users->execute([$name]);
        $state = $query_users->fetch();


        if(!$state){
            header('location: ../login.php');
            exit;
        }

        // VERIFICACION DE LA EXISTENCIA DEL PASSWORD
        if(password_verify($password, $state['password'])){

            $_SESSION['Admin'] = $name;
            header('location: ../index.php');

        }else{
            header('location: ../login.php');
            exit;            
        }


    }catch(PDOException $e){

        print "Hubo un error" . $e->getMessage();

    }




