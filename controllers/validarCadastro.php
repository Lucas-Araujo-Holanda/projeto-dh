<?php

    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $name = $_POST['']; 
    $email = $_POST['']; 
    $password = $_POST['']; 
    $telefone = $_POST[''];
    $street = $_POST['']; 
    $city = $_POST[''];
    $uf = $_POST['']; 
    $number= $_POST[''];
    $typeUser = $_POST[''];

    if(empty($user)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($email)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($password)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($telefone)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($street)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($city)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($uf)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($number)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }
    if(empty($typeUser)){
        header('Location: /projeto-dh/view/home/cadastro.php');
        die();
    }

    include_once '../model/cadastroUser.php';

?>