<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/global.css">
</head>
<body>
    <div class="login-container">
        <form action="../../controllers/validarLogin.php" method="POST" id="login">
            <h1> Faça seu Login </h1>
            <div class="form-container">
                <label for="user">Email:</label>
                <input type="text" name="user" id="user">
            </div>
            <div class="form-container">
                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass">
            </div>
            <div class="btn-container">
                <button type="submit">Entrar</button>
            </div>
            <p>É novo na plataforma?<a href="./cadastro.php"> Clique aqui para se cadastrar!</a></p>
        </form>
    </div>
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/popper.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../../js/validacoes.js"></script>
</body>
</html>