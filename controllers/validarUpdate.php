<?php

    session_start();
    if(empty($_POST)){
        header("Location: ../");
        die();
    }
    $imageUpd = $_POST['imageUpd'];
    $idProdutoUpd = $_POST['idProdutoUpd'];
    $name_productUpd = $_POST['productNameUpd']; 
    $priceUpd = $_POST['priceUpd'];
    $aboutUpd = $_POST['aboutUpd'];
    $categoryUpd = $_POST['categoryUpd'];
    $ativoUpd = $_POST['ativoUpd']; 
    
    if(empty($imageUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($idProdutoUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($name_productUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($priceUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($aboutUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($categoryUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }
    if(empty($ativoUpd)){
        header('Location: /projeto-dh/view/administracao/produtos.php');
        die();
    }

    include_once '../model/updateProd.php';  
?>