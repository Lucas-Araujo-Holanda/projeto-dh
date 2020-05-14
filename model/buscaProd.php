<?php

function buscarProduto(){
    include "conexao.php";
    $sql = $conn->prepare("SELECT * FROM tb_produto WHERE ativo = true");
    $sql->execute();
    $result = $sql->get_result();
    while($line = $result->fetch_assoc()){
        echo "
        <div class='flip-card'>
          <div class='flip-card-inner'>
            <div class='flip-card-front'>
              <img src='../../assets/images/hamburger.jpg' alt='Avatar' style='width:300px;height:300px;'>
            </div>
            <div class='flip-card-back'>
              <h1>".$line['productName']."</h1>
              <p><i class='fas fa-dollar-sign'></i>".$line['price']."</p>
              <p>Sobre:" .$line['about']."</p>
            </div>
          </div>
        </div>
        ";
    }
}