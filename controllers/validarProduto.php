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
    // $fk_idUser = $_SESSION['idUser'];

    if(empty($imageProd)){
        echo "ErroImagem";
        die();
    }
    if(empty($name_product)){
        echo "ErroProduto";
        die();
    }
    if(empty($price)){
        echo "ErroPreco";
        die();
    }
    if(empty($about)){
        echo "ErroSobre";
        die();
    }
    if(empty($category)){
        echo "ErroCategoria";
        die();
    }
    if(empty($ativo)){
        echo "ErroAtivo";
        die();
    }

    include_once '../model/cadastroProd.php';  
?>
