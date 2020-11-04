<!DOCTYPE html> 
<html lang="pt-br">
     <head>
         <meta charset="UTF-8">
         <title> Assistência - Andrômeda </title>
         <link rel="stylesheet" href="./css/estilo.css"> 
         <style>
             h4{
                 color: yellow;
             }
         </style>
     </head>
         <body>
             <!-- Inicio Menu -->
            <!-- Fim do Menu -->

            <?php
            include_once('menu.html');
            ?>

            <h2>Assitência tecnica</h2>
            <hr>
            <center>
                
            <p style="font-size: 120%; color: black;">Realizamos reparos, limpeza, colimação e instalações de instrumentos astronômicos! Atendimento somente na cidade de <b>São Paulo e região.</b></p>
            <br>
            
            <div id="area2">
            <form id="formulario" autocomplete="off">
                <fieldset> 
                <h4>Nome completo: </h4>
                <input type="text" style="width: 400px;">

                <h4>Número de telefone: </h4>
                <input type="number" style="width: auto;">

                <h4> E-mail: </h4>
                <input type="text" style="width: 400px;">
                <br><br>
                <h4><b>Serviço:</b></h4>
                <label for="serviço"><strong>Você pode assinalar mais de uma opção:</strong></label><br><br>
                <input type="radio" id="r" value="reparo" name="reparo">
                <label for="r"> Reparos</label>
                <input type="radio" id="l" value="limpeza" name="limpeza">
                <label for="l">Limpeza</label>
                <input type="radio" id="c" value="colimação" name="colimação">
                <label for="c">Colimação</label>
                <input type="radio" id="i" value="instalação" name="instalação">
                <label for="i">Instalação</label>
                <br>

                <h4>Mensagem:</h4>
                <p>Se necessario explique o reparo que deseja e insira as especificações do instrumento.</p>
                <textarea style="width: 400px;"></textarea>
                <input type="submit" value="Enviar"><br><br><br><br>
                </fieldset>
            </form>
             </div>
            </center>

            
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