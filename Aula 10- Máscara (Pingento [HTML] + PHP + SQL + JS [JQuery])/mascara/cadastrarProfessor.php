<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css"> 
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="cadastrarProfessor.php">
        <i class="fa d-inline fa-lg fa-book"></i>
        <b>&nbsp;Professores</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-primary">
            <a class="nav-link active" href="cadastrarProfessor.php">&nbsp;Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="visualizarProfessor.php">&nbsp;Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <form class="" method="post" action="php/controleProfessor.php">
            <h1 class="">
              <b>Cadastrar</b>
            </h1>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="Digite o nome do(a) professor(a)" id="nome" name="nome"> </div>
            <div class="form-group">
              <label for="celular">Número de celular</label>
              <input type="text" class="form-control celular" placeholder="(DDD) 9 + número" id="celular" name="celular"> </div>
            <div class="form-group">
              <label for="cep">CEP</label>
              <input type="text" class="form-control cep" placeholder="00000-000" id="cep" name="cep"> </div>
            <button type="submit" class="btn btn-primary" name="opcao" value="cadastrar">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="htt58ps://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="content/jquery/jquery.maskedinputs.js" type="text/javascript"></script>
  <script src="content/jquery/mascaras.js" type="text/javascript"></script>
</body>

</html>