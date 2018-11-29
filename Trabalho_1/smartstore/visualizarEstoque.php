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
        <i class="fa d-inline fa-lg fa-mobile"></i>
        <b>&nbsp;SmartStore</b>
      </a>
      <!-- INCICIANDO SESSÃO PHP -->
        <?php
            session_start(); 
        ?>
      <div class="btn-group">
        <button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;
          <?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; } ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="php/controleUsuario.php?opcao=sair">Sair</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="py-5 filter-color" style="background-image: url('img/blueSmart.jpg');background-position:right bottom;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th class="text-light">Nome do produto</th>
                <th class="text-light">Quantidade</th>
                <th class="text-light">Opção</th>
              </tr>
            </thead>
            <tbody>
              <?php
                    include 'php/crudEstoque.php';

                    $resultado = mostrarEstoque();

                    if($resultado){
                      while($linha = mysqli_fetch_assoc($resultado)){
                        $codigo = $linha["codigo"];
                        $nome = $linha["nome"];
                        $quantidade = $linha["quantidade"];

                        echo "<tr>
                                <td>" .$nome. "</td>
                                <td>" .$quantidade. "</td>
                                <td><a class='btn btn-primary' href='editarEstoque.php?codigo=".$codigo." '>Editar</a>
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