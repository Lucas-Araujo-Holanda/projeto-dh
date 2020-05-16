<?php
    // session_start();
    // if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    //     header("Location: ../../");
    // }
    // switch($_SESSION['typeUser']){
    //     case "cliente":
    //         header("Location: ../Home");
    //         break;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Dashboard - Home</title>
	<link rel="stylesheet" href="../../css/sidebar.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Usuários</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Cadastro</a></li>
            <li><a href="#"><i class="fas fa-cart-plus"></i></i>Produtos</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"> Dashboard - Home </div>  
        <div class="info">
            

         
        </div>
    </div>
</div>

</body>
</html>