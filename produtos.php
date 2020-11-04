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
     <script src="./Js/funcoes.js"></script>
</head>
   <body>
       <!--Inicio Menu-->
       <!--Fim do Menu-->
       <?php
            include_once('menu.html');
       ?>




<header>
 <h2>Produtos</h2>
 <div onmouseover="mOver(this)" onmouseout="mOut(this)"
style="background-color:rgb(247, 15, 15) ;padding:15px; text-align: center;"></div>
</header>
 <hr>
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

       $sql = "select * from produtos";
       $result = $conn->query($sql);

       if($result->num_rows > 0){
       while($rows = $result->fetch_assoc()){
      

       <div class="box_produtos" id="monoculos_<?php echo $rows["categoria"]; ?>">
        <img  src="<?php echo $rows["Imagem"]; ?>" width="120px">
        <br>
        <p class="descricao"><?php echo $rows["descricao"]; ?></p>
        <hr>
        <p class="descricao">de<strike><?php echo $rows["preco"]; ?></strike></p><br>
        <p class="precos"> ou <strong><?php echo $rows["precovista"]; ?></strong> à vista</p><br>
        <input type="button" onclick="javascript: location.href='./php/solicitar.php';" value="Comprar"/>
     </div>


       <?php
              }
       }  else { 
       echo "Nenhum produto cadastrado!";
       }

       ?>
       
 
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