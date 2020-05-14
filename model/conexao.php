<?php

    $server_db = 'localhost';
    $user_db = 'root';
    $pass_db = '';
    $name_db = 'db_projeto';

    $conn = mysqli_connect($server_db, $user_db, $pass_db, $name_db);
    $sql= "SET NAMES 'utf8'";
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_connection=utf8';
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_client=utf8';
    mysqli_query($conn, $sql);
    $sql = 'SET character_set_results=utf8';
    mysqli_query($conn, $sql);

    if(mysqli_connect_error($conn)){
        echo "Erro na conexão".mysqli_connect_error();
        die;
    }

?>