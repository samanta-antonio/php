<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Solicitação de produtos</title>
</head>
<body>
<h1> Solicitação de produto </h1><hr><br>
<div class="container">
  <div class="row">
    <div class="col-6">
      <form method="POST" action="./action/solicitar.php">
      <div class="form-row">
        <div class="form-group  col-md-8">
        <label for="nomeCliente">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nomeCliente">
        </div>

        <div class="form-group  col-md-12">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua, número, cidade e CEP">
        </div>

        <div class="form-group  col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="+55(DDD)99999-8888">
        </div>

    
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Produto</label>
  <select class="custom-select my-1 mr-sm-2" name="produto" id="inlineFormCustomSelectPref">
    <option selected>Selecione</option>
    <option value="1">Monóculo GSN 8X40 WA</option>
    <option value="2">Monóculo SUMAX Mini Might 12X21</option>
    <option value="3">Binóculo SUMAX 10 50x50 BS Ventura - Profissional</option>
    <option value="4">Binóculo GSN 8X40 WA</option>
    <option value="5">Luneta SUMAX 25X30</option>
    <option value="6">Telescópio Sky Watcher Maksutov - Cassegrain 127mm</option>
    <option value="7">Telescópio Orion Dobsoniano</option>
    <option value="8">Telescópio Refrator 150mm Toya Pro Black Diamond</option>
    <option value="9">Apontador de Astros Laser AA200</option>
    <option value="10">Adaptador para Camera</option>
    <option value="11">Ocular Colimada Toya (1,25") - Para Refratores</option>
    <option value="12">Lente Inversora 1,5 - 35mm (1,25") Para Refletores</option>
  </select>

  <div class="form-group col-md-2">
      <label for="quantidade">Quantidade</label>
      <input type="number" name="quantidade" class="form-control" id="quantidade">
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
        Estou ciente que após a solicitação do produto, o pedido estara mediante a confirmação.<br>
        Em breve voce recebera um email com o boleto referenter a compra.<br>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar pedido</button>
    </div>
      </div>
    </form>
    </div>
  </div>

  
</body>
</html>