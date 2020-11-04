<?php   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "andromeda";

    // Criando conexão
    $connect = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if(!$connect){
        echo "Falha na conexão: "  . mysqli_connect_error;
    }
    

 
?>