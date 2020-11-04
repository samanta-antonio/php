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

if(isset($_POST['nome']) && isset($_POST['msg']) && isset($_POST['email'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];

    $sql = "insert into comentarios (nome,msg,email) values('$nome','$msg','$email')";
    $result = $conn->query($sql);
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <title> Fale Conosco- Andrômeda Instrumentos Astrônomicos</title>
     <link rel="stylesheet" href="./css/estilo.css"> 
     <style>
         h4{
             color: yellow;
         }
         p{
            font-size: 120%; 
            color: black;
            text-align: center;
         }
     </style>
</head>
   <body>
        <!-- Inicio Menu -->
        <!-- Fim do Menu -->
        <?php
            include_once('menu.html');
            ?>

<h2>Contato</h2>
<hr>
<center>

<br><br>

<h2>Atendimento via e-mail</h2>
<p>Entre em contato conosco através de nosso formulário. O preenchimento é muito prático e lhe responderemos rapidamente! </p>
<br>

<div id="area">
<form id="formulario" autocomplete="off">
    <fieldset>
    <h4>Nome completo: </h4>
    <input type="text" style="width: 400px;">
    <input type="text" style="width: 400px;">
    <h4>Mensagem: </h4>
    <textarea style="width: 400px;"></textarea>
    <input type="submit" value="Enviar">
    </fieldset>
</form>
</div>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<hr>
<center>
    <span>
         <p id="formas_pagamento"><b>Formas de Pagamento</b></p>
         <img src="./Imagens/formasdepagamento.png" width="25%" alt="Formas de Pagamento">
    </span>
</center>


<br><br><br>
<center>&copy;Andrômeda Corporation</center>
</body>    
</html>