<?php

    include_once 'conexao.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     } 
     $sql = "INSERT INTO tb_pessoa (nome, email, senha, telefone, rua, cidade, uf, numero, typeUser) VALUES ('$name', '$email', '$password', '$telefone', '$street','$city', '$uf', '$number', '$typeUser')";

     if (mysqli_query($conn, $sql)) {
      header('Location: /projeto-dh/view/home/login.php');
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     $conn->close();
      
?>