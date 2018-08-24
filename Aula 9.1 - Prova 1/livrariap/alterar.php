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
      <a class="navbar-brand" href="mostrar.php">
        <i class="fa d-inline fa-lg fa-book"></i>
        <b>Livraria</b>
      </a>
    </div>
  </nav>
  <div class="py-5 text-white opaque-overlay filter-color" style="background-image: url('img/blueSmart.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <?php
                include 'php/crudLivro.php';

                $id = $_GET["id"];
                $resultado = mostrarLivroAlterar($id);

                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $id=$linha["id"];
                    $titulo=$linha["titulo"];
                    $autor=$linha["autor"];
                  }
                }
            ?>
          <h1 class="text-gray-dark">Alterar livro</h1>
          <form class="" method="post" action="php/controleLivro.php">
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" name="titulo" class="form-control" placeholder="Digite o titulo" id="titulo" value="<?php echo $titulo; ?>"> </div>
            <div class="form-group">
              <label for="autor">Autor</label>
              <input type="text" class="form-control" placeholder="Digite o autor" value="<?php echo $autor; ?>" id="autor" name="autor"> </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-secondary" value="alterarLivro" name="opcao">Alterar
              <br> </button>
            <a class="btn btn-warning" href="mostrar.php">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white text-center py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Livraria - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>