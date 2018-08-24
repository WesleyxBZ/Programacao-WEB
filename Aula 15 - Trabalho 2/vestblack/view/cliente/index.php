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
        <i class="fa d-inline fa-lg fa-shopping-bag"></i>
        <b>&nbsp;Vest Black
          <br> </b>
      </a>
        <!-- INCICIANDO SESSÃO PHP -->
        <?php
            session_start();
        ?>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Selecionar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="produtosSelecionados.php">Produtos selecionados</a>
          </li>
          <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"> <?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; } ?>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="../../control/controleUsuario.php?opcao=sair">Sair</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-5 filter-fade-in" style="background-image: url('../../img/3132.jpg');" >
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
                <th>Nome</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include '../../model/crudVenda.php';
                
                
                $codigoUsuario = $_SESSION['codigoUsuario'];
                $resultado = mostrarProdutos($codigoUsuario);

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $codigoProduto = $linha["codigoProduto"];
                    $nome = $linha["nome"];
                    $tamanho = $linha["tamanho"];
                    $preco = $linha["preco"];

                    echo "<tr>
                            <td>" .$nome. "</td>
                            <td>" .$tamanho. "</td>
                            <td>R$" .$preco. "0</td>
                            <td>
                              <a class='btn btn-secondary' href='../../control/controleVenda.php?opcao=selecionar&codigoProd=$codigoProduto&codigoUser=$codigoUsuario'>Selecionar</a>
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
  <div class="py-5 bg-dark text-white text-center">
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
          <p>© Copyright 2018 Vest Black - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>