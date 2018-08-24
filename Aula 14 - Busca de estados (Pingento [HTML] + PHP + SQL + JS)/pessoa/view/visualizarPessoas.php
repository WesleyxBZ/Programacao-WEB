<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body class="filter-light">
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="cadastrarPessoas.php">
        <i class="fa d-inline fa-lg fa-male"></i>
        <b>&nbsp;Pessoas.com
          <br> </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarPessoas.php">Cadastrar</a>
          </li>
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="visualizarPessoas.php">Visualizar</a>
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
                <th>Estado</th>
                <th>Cidade</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  include '../model/crudPessoa.php';

                  $resultado = mostrarPessoas();

                    if($resultado){
                      while($linha = mysqli_fetch_assoc($resultado)){
                        $id = $linha["id"];
                        $nome = $linha["nome"];
                        $cid_nome = $linha["cid_nome"];
                        $est_nome = $linha["est_nome"];

                        echo "<tr>
                                <td>" .$nome. "</td>
                                <td>" .$est_nome. "</td>
                                <td>" .$cid_nome. "</td>
                                <td><a class='btn btn-secondary' href='editarFuncionario.php?codigo=".$codigo." '>Editar</a></td>
                              </tr>";
                      }
                    }
                ?>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                  <a class="btn btn-secondary" href="editarPessoa?id">Editar</a>
                </td>
              </tr>

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