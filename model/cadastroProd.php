<?php
    
    include_once 'conexao.php';

    $sql = $conn->prepare("INSERT INTO tb_produtos (productName, about, price, category) VALUES ('$name_product', '$price', '$about', '$category')");  }// Colocar o insert nas ""
    
    $sql->execute();
  

    if ($conn->query($sql) === TRUE) {
        echo "Prato Cadastrado";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql->close();
    $conn->close();
      
?>