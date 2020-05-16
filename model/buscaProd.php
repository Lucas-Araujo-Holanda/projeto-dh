<?php

function buscarProduto(){
    include "conexao.php";
    $sql = $conn->prepare("SELECT * FROM tb_produtos WHERE ativo = true");
    $sql->execute();
    $result = $sql->get_result();
    while($line = $result->fetch_assoc()){
        echo '
        <div class="column">
          <div class="card">
            <img src="../../assets/images/'.$line['foto'].'" alt="" style="height: 300px; width: 300px">
            <p>'.$line['productName'].'</p>
            <p>Preço: '.$line['price'].'</p>
            <p>Sobre: '.$line['about'].'</p>
          </div>
        </div>';
    }
}