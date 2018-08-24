<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> 
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="visualizar.php">
        <i class="fa d-inline fa-lg fa-edge"></i>
        <b>&nbsp;Informática WEB
          <br> </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="cadastrar.php">Cadastrar</a>
          </li>
          <li class="nav-item bg-primary">
            <a class="nav-link active" href="visualizar.php">Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1" style="transition: all 0.25s;">
          <form class="">
            <h1 class="">
              <b>Visualizar e pesquisar</b>
            </h1>
            <div class="form-group">
              <label for="pesquisa">
                <b>Pesquisar</b>
              </label>
              <input type="text" class="form-control" placeholder="Digite a descrição ou marca para pesquisar" id="pesquisa" name="pesquisa"> </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <table class="table">
            <thead>
              <tr>
                <th>Descrição</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody class="table-results">
              <?php

                include 'php/crudInformatica.php';

                $resultado = mostrarInformatica();

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $descricao = $linha['descricao'];
                    $marca = $linha['marca'];
                    echo"<tr>
                          <td>$descricao</td>
                          <td>$marca</td>
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

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/javascriptPesquisar.js"></script>
</body>

</html>