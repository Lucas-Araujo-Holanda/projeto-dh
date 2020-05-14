<?php
    
    include_once 'conexao.php';

    $sql = $conn->prepare("INSERT INTO tb_produtos (product_name, price, about, category, ativo) VALUES ('$name_product', '$price', '$about', '$category', '$ativo')");  }// Colocar o insert nas ""
    
    $sql->execute();
  

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql->close();
    $conn->close();
      
?>