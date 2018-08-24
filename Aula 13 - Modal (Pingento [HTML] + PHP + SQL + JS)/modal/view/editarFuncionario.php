<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="visualizarFuncionario.php">
        <i class="fa d-inline fa-lg fa-archive"></i>
        <b>Funcionario.com</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarFuncionario.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="visualizarFuncionario.php">Visualizar
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
          <h1 class="">
            <b>Editar funcionário</b>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
                include '../model/crudFuncionario.php';

                $codigo = $_GET["codigo"];
                $resultado = mostrarFuncionarioAlterar($codigo);

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $codigo=$linha["codigo"];
                    $nome=$linha["nome"];
                    $cargo=$linha["cargo"];
                  }
                }
            ?>
          <form class="" method="post" action="../control/controleFuncionario.php">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="digite o nome do(a) funcionário(a)" id="nome" name="nome" value="<?php echo $nome; ?>"> </div>
            <div class="form-group">
              <label for="nome">Cargo
                <br> </label>
              <input type="text" class="form-control" placeholder="digite o cargo do(a) funcionário(a)" id="cargo" name="cargo" value="<?php echo $cargo; ?>"> </div>
              <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <button type="submit" class="btn btn-secondary" name="opcao" value="alterar" >Alterar</button>
            <button type="submit" class="btn btn-danger" name="opcao" value="excluir">Excluir</button>
            <a class="btn btn-warning" href="visualizarFuncionario.php">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>