<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <title>Cadastrar</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/ic_account_circle_black_24px.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Cadastro
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="cadastrar.php">Página inicial <span class="sr-only">(ativo)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visualizar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="col-md-12">
                <h1>Cadastrar produto</h1>
            </div>
            <div class="col-md-12">
                <form method="post" action="#">
                  <div class="form-group">
                    <label for="Descricao">Descrição</label>
                    <input type="text" class="form-control" id="Descricao" aria-describedby="emailHelp" placeholder="digite uma descrição">
                  </div>
                  <div class="form-group">
                    <label for="Quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="Quantidade" name="Quantidade" placeholder="digite a quantidade">
                  </div>
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                  <button type="submit" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
          
          <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="dist/js/jquery.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="dist/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="dist/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>