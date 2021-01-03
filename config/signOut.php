<?php
session_start();

//DESTRUIR TODAS LAS VARIABLES DE SESIÓN.
    $_SESSION = [];

//SE DESTRUYE LA SESIÓN COMPLETAMENTE Y BORRA LA COOKIE.

if(ini_get("session.use_cookie")){

    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, 
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']    
    );

}

//PROCEDEMOS A BORRAR LA SESIÓN.

session_destroy();
header('location: ../login.php');