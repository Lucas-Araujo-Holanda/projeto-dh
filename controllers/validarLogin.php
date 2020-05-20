<?php

    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['user']; 
    $pass = $_POST['pass']; 

    if(empty($user)){
        echo "ErroUser";
        die();
    }
    if(empty($pass)){
        echo "ErroPass";
        die();
    }

    echo "Sucesso";

    // include_once '../model/login.php';

?>