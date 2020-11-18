<!DOCTYPE html> 
<html lang="pt-br">
     <head>
         <meta charset="UTF-8">
         <title> Assistência - Andrômeda </title>
         <link rel="stylesheet" href="./css/estilo.css"> 
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
 <div class = "container-fluid text-white bg-secondary  text-warning">
            <h2>Assitência técnica</h2>
            <hr>
    
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <form method="POST" action>
      <div class="form-row">
        <div class="form-group  col-md-12">
        <label for="nomeCliente">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nomeCliente">
        </div>

        <div class="form-group  col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="+55(DDD)99999-8888">
        </div>

    
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Serviços</label>
  <select class="custom-select my-1 mr-sm-2" name="produto" id="inlineFormCustomSelectPref">
    <option selected>Selecione o serviço desejado</option>
    <option selected>Selecione</option>
    <option value="1">Reparos</option>
    <option value="2">Limpeza</option>
    <option value="3">Colimação</option>
    <option value="4">Instalação</option>
  </select>

  <div class="mb-3">
    <label for="validationTextarea">Descreva o serviço desejado e as especificações do instrumento</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Por favor descreva o serviço." required></textarea>
    <div class="invalid-feedback">
      
    </div>
  </div>
      </label>
    </div>

  <div>
  <button type="submit" class="btn btn-success">Enviar pedido</button>
    </div>
      </div>
    </form>
    </div>
  </div>
        
            

            

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
</body>    
</html>