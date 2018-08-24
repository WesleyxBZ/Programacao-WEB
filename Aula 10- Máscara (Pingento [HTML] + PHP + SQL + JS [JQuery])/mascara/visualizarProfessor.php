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
      <a class="navbar-brand" href="visualizarProfessor.php">
        <i class="fa d-inline fa-lg fa-book"></i>
        <b>&nbsp;Professores</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarProfessor.php">&nbsp;Cadastrar</a>
          </li>
          <li class="nav-item bg-primary">
            <a class="nav-link active" href="visualizarProfessor.php">&nbsp;Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">
            <b>Visualizar</b>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Celular</th>
                <th>CEP</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'php/crudProfessor.php';

                $resultado = visualizarProfessor();

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $nome = $linha["nome"];
                    $celular = $linha["celular"];
                    $cep = $linha["cep"];

                    echo "<tr>
                            <td>" .$nome. "</td>
                            <td>" .$celular. "</td>
                            <td>" .$cep. "</td>
                          </tr>";
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>