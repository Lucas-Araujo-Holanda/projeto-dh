<?php

    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['']; 
    $pass = $_POST['']; 

    if(empty($user)){
        header('Location: /projeto-dh/view/home/login.php');
        die();
    }
    if(empty($pass)){
        header('Location: /projeto-dh/view/home/login.php');
        die();
    }

    include_once '../model/login.php';

?>