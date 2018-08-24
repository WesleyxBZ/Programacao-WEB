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
        <i class="fa d-inline fa-lg fa-mobile"></i>
        <b>&nbsp;SmartStore</b>
      </a>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="login.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Login</a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-white opaque-overlay filter-dark" style="background-image: url('img/blueSmart.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <h1 class="text-gray-dark">Cadastro</h1>
          <p class="lead mb-4">Preencha as informações para realizar seu cadastro</p>
          <form class="" method="post" action="php/controleUsuario.php">
            <div class="form-group">
              <label for="nome">Nickname</label>
              <input type="text" class="form-control" placeholder="Digite um nickname" id="nome" name="nome"> </div>
            <div class="form-group">
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" placeholder="Digite uma senha" id="senha"> </div>
            <button type="submit" class="btn btn-secondary" name="opcao" value="cadastrarUsuario">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white text-center py-4">
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
          <p>© Copyright 2018 SmartStore - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>