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




<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <title> Produtos - Andrômeda Instrumentação Astronômica</title>
     <link rel="stylesheet" href="./css/estilo.css"> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <script src="./Js/funcoes.js"></script>
</head>

   <body>
       <!--Inicio Menu-->
       <!--Fim do Menu-->
       <?php
            include_once('menu.html');
       ?>
<header>
<div class = "container-fluid text-white bg-secondary text-warning">
 <h2>Produtos</h2>
 <hr>
</div>
</header>

<div class = "container-fluid text-white bg-secondary">
<section class="categorias">
 <div class="categorias">
     <h3 style="color:black;"><b>Categorias</b></h3>
     <ul>
        <li onclick="exibir_todos()">Todos(12)</li>
        <li onclick="exibir_categoria('monoculos')">Monóculos(2)</li>
        <li onclick="exibir_categoria('binoculos')">Binóculos(2)</li>
        <li onclick="exibir_categoria('lunetas')">Lunetas(1)</li>
        <li onclick="exibir_categoria('refletores')">Telescópios Refletores(2)</li>
        <li onclick="exibir_categoria('refratores')">Telescópios Refrator(1)</li>
        <li onclick="exibir_categoria('acessorios')">Acessorios(4)</li>
      </ul>
</div>
</section>

     
       <?php

       $sql = "SELECT * FROM produtos";
       $result = $connect->query($sql);

       if($result->num_rows > 0){
       while($rows = $result->fetch_assoc()){
      
       ?>

       <div class="box_produtos" id="monoculos_<?php echo $rows["categoria"]; ?>">
        <img  src="<?php echo $rows["imagem"]; ?>" width="120px">
        <br>
        <p class="descricao"><?php echo $rows["descricao"]; ?></p>
        <hr>
        <p class="descricao">de R$ <strike><?php echo $rows["preco"]; ?></strike> reais por </p><br>
        <p class="precos"> R$ <strong><?php echo $rows["precovista"]; ?></strong> à vista</p><br>
        <input type="button" onclick="javascript: location.href='./php/comprar.php';" value="Comprar"/>
        
     </div>


       <?php
              }
       }  else { 
       echo "Nenhum produto cadastrado!";
       }

       ?>
       

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
    </div>
    </div>
</body>    
</html>