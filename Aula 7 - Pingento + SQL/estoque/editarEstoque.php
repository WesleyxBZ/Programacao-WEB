<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estoque - index</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa d-inline fa-lg fa-cube"></i><b></b></a><b><a href="index.php" class="text-white">Estoque</a></b>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Página inicial</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cadastrarEstoque.php">Cadastrar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="visualizarEstoque.php">Visualizar
              <br> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Alterar</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
            include 'crudEstoque.php';

            $codigo = $_GET["codigo"];
            $resultado = mostrarProdutoAlterar($codigo);

            if($resultado){
              while($linha = mysqli_fetch_assoc($resultado)){
                $codigo=$linha["codigo"];
                $descricao=$linha["descricao"];
                $quantidade=$linha["quantidade"];
              }
            }
          ?>
          <form class="" method="post" action="controleEstoque.php">
            <div class="form-group"> <label for="descricao">Descrição</label>
              <input type="text" class="form-control" placeholder="Digite o nome do produto" id="descricao" name="descricao" value="<?php echo $descricao; ?>"> <small class="form-text text-muted"></small> </div>
            <div class="form-group"> <label for="quantidade">Quantidade</label>
              <input type="number" class="form-control" placeholder="Digite a quantidade" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>"> </div>
              <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <button type="submit" class="btn btn-primary mr-auto" name="opcao" value="Alterar">Alterar</button>
            <button type="submit" class="btn btn-danger m-1" name="opcao" value="Excluir">Excluir</button>
            <a class="btn btn-secondary" href="visualizarEstoque.php">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-dark text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://www.facebook.com" target="_blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a>
        </div>
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://twitter.com" target="_blank"><i class="fa fa-fw fa-twitter fa-3x text-white text-center"></i></a>
        </div>
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://www.instagram.com" target="_blank"><i class="fa fa-fw fa-instagram text-white fa-3x text-left"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Estoque - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>