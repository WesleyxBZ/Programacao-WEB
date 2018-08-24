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
      <a class="navbar-brand" href="mostrarEstoque.php">
        <i class="fa d-inline fa-lg fa-archive"></i>
        <b>Estoque.com
          <br> </b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="mostrarEstoque.php">Mostrar estoque</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-5 filter-fade-in">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="transition: all 0.25s;">
          <form class="">
            <h1 class="">
              <b>Mostrar e pesquisar</b>
            </h1>
            <div class="form-group">
              <label for="pesquisa"> </label>
              <input type="text" class="form-control" placeholder="Digite o nome da marca para pesquisar" id="pesquisa" name="pesquisa"> </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Local</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody class="table-results">
              <?php
                include '../model/crudEstoque.php';
                    
                $resultado = mostrarEstoque();

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $id = $linha["id"];
                    $marca = $linha["marca"];
                    $local = $linha["local"];

                    echo "<tr>
                              <td>" .$marca. "</td>
                              <td>" .$local. "</td>
                              <td>
                                <a class='btn btn-secondary' href='alterarEstoque.php?codigo=".$id."'>Editar</a>
                              </td>
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
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../js/jsPesquisar.js"></script>
</body>

</html>