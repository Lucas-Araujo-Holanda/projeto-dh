<?php
    
    session_start();
    if(empty($_POST)){
        header("Location: ../");
        die();
    }
    
    $name_product = $_POST['']; 
    $price = $_POST[''];
    $about = $_POST[''];
    $category = $_POST[''];
    $ativo = $_POST['']; 

    if(empty($name_product)){
        echo "ErroProduto";
        die();
    }
    if(empty($price)){
        echo "ErroPrice";
        die();
    }
    if(empty($about)){
        echo "ErroAbout";
        die();
    }
    if(empty($category)){
        echo "ErroCategory";
        die();
    }
    if(empty($ativo)){
        echo "ErroAtivo";
        die();
    }

    include_once '../model/cadastroProd.php';
    
?>
