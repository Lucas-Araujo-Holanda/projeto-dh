<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
      header("Location: ../../");
    }
    switch($_SESSION['typeUser']){
      case "cliente":
        header("Location: ../Home");
        break;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard - Produtos</title>
  <link rel="stylesheet" href="../../css/sidebar.css">
  <link rel="stylesheet" href="../../css/global.css">
  <link rel="stylesheet" href="../../css/card.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Usuários</a></li>
            <li><a href="./produtos.php"><i class="fas fa-project-diagram"></i>Cadastro</a></li>
            <li><a href="./estoque.php"><i class="fas fa-cart-plus"></i></i>Produtos</a></li>
            <li><a href="../cabecalhos/deslogar.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"> Produtos Cadastrados </div>  
        <div class="info">
          <div class="row">
                <?php
                  include '../../model/buscaProd.php';
                  buscarProduto();
                ?>
          </div>
      </div>
    </div>
</div>

  <script src="../../node_modules/jquery/dist/jquery.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
</body>

</html>