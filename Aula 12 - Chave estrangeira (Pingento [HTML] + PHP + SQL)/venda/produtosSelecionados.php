<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body class="">
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="produtosSelecionados.php">
        <i class="fa d-inline fa-lg fa-cart-plus"></i>
        <b>&nbsp;Loja.com</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="produtos.php">Produtos
              <br> </a>
          </li>
          <li class="nav-item bg-primary">
            <a class="nav-link active" href="produtosSelecionados.php">Produtos selecionados
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
            <b>Produtos disponíveis</b>
            <br> </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Descrição</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'php/crudVenda.php';

                $resultado = mostrarProdutosSelecionados();

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $codigoProduto = $linha["codigoProduto"];
                    $descricao = $linha["descricao"];

                    echo "<tr>
                            <td>" .$descricao. "</td>
                            <td><a class='btn btn-warning' href='php/controleVenda.php?opcao=tirarSelecao&codigo=$codigoProduto'>Tirar seleção</a></td>
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