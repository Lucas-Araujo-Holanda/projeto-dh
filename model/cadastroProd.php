<?php
    
    include_once 'conexao.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     } 
     $sql = "INSERT INTO tb_produtos (productName, about, price, category, foto) VALUES ('$name_product', '$about', '$price', '$category', '$imageProd')";

     if (mysqli_query($conn, $sql)) {
      echo "<script> alert('Produto cadastrado com sucesso!');</script>";
      header('Location: /projeto-dh/view/administracao/produtos.php');
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     $conn->close();
      
?>