<?php
    include("seguranca.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIJIL</title>

    <link rel="shortcut icon" href="#" type="image/x-icon" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/main.css">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <!-- css do projeto -->
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <!-- NAVBAR -->
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a href="#" class="navbar-brand">
                    <img src="img/viiji.svg" alt="VIJIL">
                    <span>VIJIL</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listar_produto.php">Lista de Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="cadastro_produtos.php">Cadastro de Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_corretor.php">Lista de Corretores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastro de Corretores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destruirSessao.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="container-principal-produtos">
         <h4 class="page-header">CADASTRO DE CORRETORES</h4>
         <hr>
            <form action="realizarCadastro_corretor.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">
                <div class="form-group col-md-6 mb-3">
                  <label>Nome:</label>
                  <input class="form-control col-md-10 col-sm-10" type="text" name="nome" placeholder="Digite o nome do corretor" required/>
                </div>
                
                <div class="form-group col-md-6 mb-3">
                  <label>Email:</label>
                  <input class="form-control col-md-10 col-sm-10" type="email" name="email" placeholder="Digite o email do corretor" required/>
                </div>
                  
                </div>
                <div class="row">
                  <div class="form-group col-md-8 mb-3">
                                <!--Realizando Upload de Imagem-->
                            <label class="control-label">Imagem</label>
                            <input class="form-control" type="file" required name="img">
                  </div>
                  <div class="form-group col-md-4 mb-3">
                    <label>Celular:</label>
                    <input class="form-control col-md-10 col-sm-10 telefone" type="text" name="celular" maxlength="13" required>
                  </div>  
              </div>
              <div class="row">

                <div class="form-group col-md-3 mb-3">
                  <label>Senha:</label>
                  <input class="form-control col-md-10 col-sm-10" type="password" name="senha" required>
                </div>

                <div class="form-group col-md-3 mb-3">
                  <label>Confirmar senha:</label>
                  <input class="form-control col-md-10 col-sm-10" type="password" name="conf_senha" required>
                </div>

                

              </div>
              <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-outline-dark btn-lg btn-block" type="submit" value="Cadastrar">Cadastrar</button>
                </div>
            </form>
          </div>
       </div><!--Fechando container bootstrap-->

       <?php include("dep_query.php");?>
    
         <!--importação js-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.min.js"></script>
  <script>
      $('.telefone').mask('(00) 00 00000-0000');
  </script>
</body>
</html>