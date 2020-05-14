<?php 
    include_once 'conexao.php';

    $sql = $conn->prepare(""); // COLOCAR A SELECT DENTRO DAS ""

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
        $_SESSION['idUserr'] = $line['idUser'];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $line['nome'];
        $_SESSION['typeUser'] = $line['typeUser'];

        switch($line['typeUser']){
            case "administrador":
                echo "SuccessAdm";
                break;
            case "cliente":
                echo "SuccessClient";
                break;
            default:
                echo "FalhaLogin";
                die();
        }
    }
?>