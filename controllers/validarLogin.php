<?php

    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['']; 
    $pass = $_POST['']; 

    if(empty($user)){
        echo "ErroUser";
        die();
    }
    if(empty($pass)){
        echo "ErroSenha";
        die();
    }

    include_once '../model/login.php';

?>