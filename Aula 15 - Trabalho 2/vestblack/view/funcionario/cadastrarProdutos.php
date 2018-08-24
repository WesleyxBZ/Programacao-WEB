<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fa d-inline fa-lg fa-shopping-bag"></i>
        <b>&nbsp;Vest Black
          <br> </b>
      </a>
      <!-- INCICIANDO SESSÃO PHP -->
      <?php
            session_start();
        ?>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link disabled" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarProdutos.php">Cadastrar produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="VisualizarProdutos.php">Visualizar produtos</a>
          </li>
          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
              <?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; } ?>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../../control/controleUsuario.php?opcao=sair">Sair</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url('../../img/3132.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5">
            <div class="card-body">
              <h1 class="mb-4 text-dark">Cadastrar Produtos</h1>
              <form method="post" action="../../control/controleProduto.php">
                <div class="form-group">
                  <label class="text-dark" for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" class="form-control" placeholder="digite o nome"> </div>
                <div class="form-group">
                  <label class="text-dark" for="tamanho">Tamanho</label>
                  <input type="text" placeholder="digite o tamanho" id="tamanho" name="tamanho" class="form-control"> </div>
                <div class="form-group">
                  <label class="text-dark" for="preco">Preço</label>
                  <input type="text" class="form-control" placeholder="digite o preço do produto" id="preco" name="preco"> </div>
                  <div class="form-group">
                  <label class="text-dark" for="preco">Código de barras</label>
                  <input type="text" class="form-control codigoBarras" placeholder="digite o codigo de barras" id="codigoBarras" name="codigoBarras"> </div>
                <button type="submit" name="opcao" value="cadastrarProduto" class="btn btn-secondary">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-dark text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://www.facebook.com" target="_blank">
            <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://twitter.com" target="_blank">
            <i class="fa fa-fw fa-twitter fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-4 align-self-center">
          <a href="https://www.instagram.com" target="_blank">
            <i class="fa fa-fw fa-instagram text-white fa-3x"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Vest Black - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../../js/jquery.maskedinputs.js" type="text/javascript"></script>
  <script src="../../js/mascaras.js" type="text/javascript"></script>
</body>

</html>