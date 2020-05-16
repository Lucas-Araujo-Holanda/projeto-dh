<?php

    session_start();
    if(empty($_POST)){
        header("Location: ../");
        die();
    }
    
    $imageProd = $_POST['imgProd'];
    $name_product = $_POST['productName']; 
    $price = $_POST['price'];
    $about = $_POST['about'];
    $category = $_POST['category'];
    $ativo = $_POST['ativo']; 
    $fk_idUser = $_SESSION['idUser'];

    if(empty($imageProd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($name_product)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($price)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($about)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($category)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($ativo)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }

    include_once '../model/cadastroProd.php';  
?>
