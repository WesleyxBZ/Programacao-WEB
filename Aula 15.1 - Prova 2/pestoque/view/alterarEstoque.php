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
        <b>Estoque.com</b>
        <br> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link desable" href="mostrarEstoque.php">Mostrar estoque</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <?php
        include '../model/crudEstoque.php';

        $id = $_GET["codigo"];    
        $resultado = mostrarEstoqueAlterar($id);

        if($resultado){
          while($linha = mysqli_fetch_assoc($resultado)){
            $id = $linha["id"];
            $marca = $linha["marca"];
            $local = $linha["local"];
            }
        }
      ?>
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5">
            <div class="card-body">
              <h1 class="mb-4 text-dark">Alterar estoque</h1>
              <form method="post" action="../control/controleEstoque.php">
                
                <div class="form-group">
                  <label class="text-dark" for="marca">Marca</label>
                  <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>" class="form-control"> </div>

                <div class="form-group">
                  <label class="text-dark" for="local">Local</label>
                  <input type="text" id="local" name="local" value="<?php echo $local; ?>" class="form-control"> </div>
                  <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                <button type="submit" name="opcao" value="alterarEstoque" class="btn btn-secondary">Alterar</button>
                <a class="btn btn-warning" href="mostrarEstoque.php">Cancelar</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>