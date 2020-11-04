<?php 

require_once("db_connect.php");

        if  
            (
            isset($_POST['nome'])){
            echo "olar";    
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $produto = $_POST['produto'];
            $quantidade = $_POST['quantidade'];

            $sql = "INSERT INTO pedidos VALUES (null, '$nome', '$endereco', '$email', '$telefone', '$produto', '$quantidade');";

            mysqli_query($connect, $sql);
        }


?>

