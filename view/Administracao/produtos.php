<?php
   session_start();
     if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
       header("Location: ../../");
     }
     switch($_SESSION['tipoUsuario']){
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
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/produtos.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> 
    <title>Dashboard - Cadastro</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      function validarCamposProd(){
        var imgProd = document.getElementById('imgProd').value;
        var productName = document.getElementById('productName').value;
        var price = document.getElementById('price').value;
        var category = document.getElementById('category').value;
        var about = document.getElementById('about').value;
        var ativo = document.getElementById('ativo').value;

        if(imgProd == ""){
          alert("Escolha uma imagem para o produto!");
          e.PreventDefault();
        } else if(productName == ""){
          alert("Preencha o nome do produto!");
          e.preventDefault();
        } else if(price == ""){
          alert("Preencha o preço do produto!");
          e.preventDefault();
        } else if(category == ""){
          alert("Preencha a categoria do produto!");
          e.preventDefault();
        } else if(about == ""){
          alert("Preencha sobre o produto!");
          e.preventDefault();
        } else if(ativo == ""){
          alert("Preencha o status do produto!");
          e.preventDefault();
        } else{
          document.getElementById('cadProd').submit()
        }
      }
      function validarCamposUpd(){
        var imageUpd = document.getElementById('imageUpd').value;
        var idProdutoUpd = document.getElementById('idProdutoUpd').value;
        var productNameUpd = document.getElementById('productNameUpd').value;
        var priceUpd = document.getElementById('priceUpd').value;
        var categoryUpd = document.getElementById('categoryUpd').value;
        var aboutUpd = document.getElementById('aboutUpd').value;
        var ativoUpd = document.getElementById('ativoUpd').value;
        if(imageUpd = ""){
          alert("Escolha uma imagem para o produto!");
        } else if(idProdutoUpd == ""){
          alert("Preencha o ID do produto!");
        } else if(productNameUpd == ""){
          alert("Preencha o nome do produto!");
          e.preventDefault();
        } else if(priceUpd == ""){
          alert("Preencha o preço do produto!");
          e.preventDefault();
        } else if(categoryUpd == ""){
          alert("Preencha a categoria do produto!");
          e.preventDefault();
        } else if(aboutUpd == ""){
          alert("Preencha sobre o produto!");
          e.preventDefault();
        } else if(ativoUpd == ""){
          alert("Preencha o status do produto!");
          e.preventDefault();
        } else{
          document.getElementById('updProd').submit()
        }
      }    
      function previewCad(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imagemProd')
            .attr('src', e.target.result)
            .width(300)
            .height(300);
        };
        reader.readAsDataURL(input.files[0]);
      }};
      function previewUpd(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imagemProdUpd')
            .attr('src', e.target.result)
            .width(300)
            .height(300);
        };
        reader.readAsDataURL(input.files[0]);
      }};
    </script>
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
        <div class="header"> Cadastro e Update de Produtos </div>  
        <div class="info">
          <div class="row">
            <div class="column">
              <div class="card">
                
                <form method="POST" action="../../controllers/validarProduto.php" id="cadProd">
                  <div class="container-file">
                    <img id="imagemProd" alt="" src="../../assets/images/300por300.png">
                    <input type="file" name="imgProd" id="imgProd" onchange="previewCad(this);">
                  </div>
                  <div class="container-name">
                    <label for="productName">Nome do produto:</label>
                    <input type="text" name="productName" id="productName">
                  </div>
                  <div class="container-price">
                    <label for="price">Preço do produto:</label>
                    <input type="text" name="price" id="price">
                  </div>
                  <div class="container-price">
                      <label for="category">Categoria: </label>
                      <input type="text" name="category" id="category">
                  </div>
                  <div class="container-about">
                    <label for="about">Sobre o produto: </label>
                    <textarea name="about" id="about" cols="30" rows="10"></textarea>
                  </div>
                  <div class="container-status">
                    <label for="ativo">Escolha uma opção: </label>
                    <select name="ativo" id="ativo">
                      <option value="null">Selecione</option>
                      <option value="true">Ativo</option>
                      <option value="false">Inativo</option>
                    </select>
                  </div>
                  <div class="container-button">
                    <button type="submit" onclick="return validarCamposProd()" > Cadastrar produto </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="column">
              <div class="card">

                  <form method="POST" action="../../controllers/validarUpdate.php" id="updProd">
                    <div class="container-file">
                      <img src="../../assets/images/300por300.png" id="imagemProdUpd" alt="" style="height: 300px; width: 300px;">
                      <input type="file" name="imageUpd" id="imageUpd" onchange="previewUpd(this);">
                    </div>
                    <div class="container-name">
                      <label for="idProdutoUpd">ID do produto: </label>
                      <input type="text" name="idProdutoUpd" id="idProdutoUpd">
                    </div>
                    <div class="container-name">
                      <label for="productNameUpd">Nome do produto:</label>
                      <input type="text" name="productNameUpd" id="productNameUpd">
                    </div>
                    <div class="container-price">
                      <label for="priceUpd">Preço do produto:</label>
                      <input type="text" name="priceUpd" id="priceUpd">
                    </div>
                    <div class="container-price">
                      <label for="categoryUpd">Categoria: </label>
                      <input type="text" name="categoryUpd" id="categoryUpd">
                    </div>
                    <div class="container-about">
                      <label for="aboutUpd">Sobre o produto: </label>
                      <textarea name="aboutUpd" id="aboutUpd" cols="30" rows="10"></textarea>
                    </div>
                    <div class="container-status">
                      <label for="ativoUpd">Escolha uma opção: </label>
                      <select name="ativoUpd" id="ativoUpd">
                        <option value="null">Selecione</option>
                        <option value="true">Ativo</option>
                        <option value="false">Inativo</option>
                      </select>
                    </div>
                    <div class="container-button">
                      <button type="submit" onclick="return validarCamposUpd()"> Atualizar produto </button>
                    </div>
                  </form>
                  
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script> 
</body>
</html>