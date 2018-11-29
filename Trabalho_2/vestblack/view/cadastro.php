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
      <a class="navbar-brand" href="cadastro.php">
        <i class="fa d-inline fa-lg fa-shopping-bag"></i>
        <b>&nbsp;Vest Black
          <br> </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  desable" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" href="cadastro.php">Cadastrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url('../img/fundo.jpg');background-position:center center;background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h3 class="display-3">
            <b class="text-muted">Crie sua moda</b>
          </h3>
          <h3>
            <b class="text-muted">Vamos começar? Faça seu cadastro</b>
          </h3>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body p-5">
              <h1 class="pb-3">
                <b>Cadastro</b>
              </h1>
              <form action="../control/controleUsuario.php" method="post">
                <div class="form-group">
                  <label class="text-dark" for="nome">Nome</label>
                  <input class="form-control" placeholder="digite um nome" id="nome" name="nome"> </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input class="form-control" placeholder="digite uma senha" id="senha" type="password" name="senha"> </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-primary active">
                    <input type="radio" name="tipo" id="cliente" autocomplete="off" checked="" value="cliente"> Cliente </label>
                  <label class="btn btn-outline-primary">
                    <input type="radio" name="tipo" id="funcionario" autocomplete="off" value="funcionario"> Funcionário </label>
                </div>
                <div> </div>
                <button type="submit" name="opcao" value="cadastrar" class="btn mt-2 btn-secondary">Cadastrar</button>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>