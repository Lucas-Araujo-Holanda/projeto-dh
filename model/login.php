<?php 
    include_once 'conexao.php';

    $sql = $conn->prepare("SELECT * FROM tb_pessoa WHERE (email = ? OR username = ?) and senha = ? and ativo = '1'");

    $sql->bind_param("sss", $user, $user, $pass);
    $sql->execute();

    $result = $sql->get_result();
    $line = $result->fetch_assoc();

    $sql->close();
    $conn->close();
    
    if(empty($line)){
        echo "FalhaLogin";
        die();
    } else{
        $_SESSION['idUser'] = $line['idUser'];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $line['nome'];
        $_SESSION['typeUser'] = $line['typeUser'];

        switch($line['typeUser']){
            case "administrador":
                header("Location: ../view/administacao/index.php");
                break;
            case "cliente":
                header("Location: ../view/home/index.php");
                break;
            default:
                echo "FalhaLogin";
                die();
        }
    }
?>