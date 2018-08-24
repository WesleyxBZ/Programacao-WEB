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
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="cadastrarPessoas.php">Cadastrar</a>
          </li>
          <li class="nav-item">
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
            <b>Cadastrar</b>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="../control/controlepessoas.php">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="Digite o nome" id="nome" name="nome"> </div>
            <div class="form-group">
              <label for="estado">Estado</label>
              <select class="custom-control custom-select" id="estado" name="estado">

                <?php
                  include '../model/crudPessoa.php';

                  echo "<option value='0'>Escolha um estado</option>";

                  $resultado = buscarEstados();

                    if($resultado){
                      while($linha = mysqli_fetch_assoc($resultado)){
                        $id = $linha["id"];
                        $est_nome = $linha["est_nome"];

                        echo "<option value='".$linha['id']."'>".$linha['est_nome']."</option>";
                      }
                    }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <select class="custom-control custom-select" id="cidade" name="cidade">
                <option value="0">Escolha um estado</option>;
              </select>
            </div>
            <button type="submit" class="btn btn-secondary" name="opcao" value="cadastrar">Cadastrar
              <br> </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="/pessoa/js/jquery-3.3.1.min.js"></script>
  <script>
    $("#estado").on("change", function(){
      var idEstado = $("#estado").val();
      $.ajax({
        url: 'busca_cidades.php',
        type: 'POST',
        data: {id:idEstado},
        beforeSend: function(){
          $("#cidade").html("carregando...");
        },
        success: function(data){
          $("#cidade").html(data);
        },
        error: function(){
          $("#cidade").html("Houve um erro ao carregar");
        }

      });

    });
  </script>
</body>

</html>