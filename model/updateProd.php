<?php

    include_once 'conexao.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      
    $sql = "UPDATE tb_produtos SET productName='$name_productUpd', about='$aboutUpd', price='$priceUpd', category='$categoryUpd', foto='$imageUpd', ativo='$ativoUpd' WHERE idProduto='$idProdutoUpd'";
      
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Produto atualizado com sucesso!');</script>";
        header('Location: /projeto-dh/view/administracao/produtos.php');
    } else {
        echo "Erro ao dar update! " . $conn->error;
    }
      
    $conn->close();
?>