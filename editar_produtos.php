<?php
    include("seguranca.php");
    include_once("conexao.php");
    
    $id = $_POST['cod_imovel'];
    $selecionar = "SELECT * FROM imovel WHERE cod_imovel = '$id'";
    $resultado = mysqli_query($conexao, $selecionar);
    $row_imovel = mysqli_fetch_assoc($resultado);
    
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
                            <a class="nav-link" href="cadastro_corretores.php">Cadastro de Corretores</a>
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
         <h4 class="page-header">EDITAR DADOS DO IMÓVEL</h4>
         <hr>
         <?php
            if (isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
         ?>
            <form action="editarFuncao_produtos.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">

                
                  <input class="form-control col-md-10 col-sm-10" type="hidden" name="cod_imovel"  value="<?php echo $row_imovel['cod_imovel'];?>" required/>
           

                <div class="form-group col-md-5 mb-3">
                  <label>Endereço:</label>
                  <input class="form-control col-md-10 col-sm-10" type="text" name="end" placeholder="Digite o endereço do imóvel"  value="<?php echo $row_imovel['end'];?>" required/>
                </div>
                  <div class="form-group col-md-2 mb-3">
                    <label>Número:</label>
                    <input class="form-control col-md-10 col-sm-10" type="text" name="numero" value="<?php echo $row_imovel['num_end'];?>" required>
                  </div> 
                  <div class="form-group col-md-3 mb-3">
                    <label>CEP:</label>
                    <input class="form-control col-md-10 col-sm-10 cep" type="text" name="cep" value="<?php echo $row_imovel['cep'];?>" required>
                  </div>      
                  <div class="form-group col-md-2 mb-3">
                    <label>Tipo do Produto:</label>
                    <select  name="tipo" class="form-select form-control form-control-sm col-md-10 col-sm-10" placeholder="Escolha o tipo do imóvel" value="<?php echo $row_imovel['tipo'];?>" required>
                      <option value="<?php echo $row_imovel['tipo'];?>"><?php echo $row_imovel['tipo'];?></option>
                      <option value="Apartamento">Apartamento</option>
                      <option value="Casa">Casa</option>
                   </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2 mb-3">
                    <label>Forma Contrato:</label>
                    <select name="forma_contrato" class="form-select form-control form-control-sm col-md-10 col-sm-10" required>
                    <option value="<?php echo $row_imovel['forma_contrato'];?>"><?php echo $row_imovel['forma_contrato'];?></option>
                    <option value="Aluguel">Aluguel</option>
                    <option value="Compra">Compra</option>
                  </select>
                  </div> 
                  <div class="form-group col-md-2 mb-3">
                    <label>Área:</label>
                    <input class="form-control col-md-10 col-sm-10" type="text" name="area" value="<?php echo $row_imovel['area'];?>" required>
                  </div>
                  
                  <div class="form-group col-md-3 mb-3">
                    <label>Quantidade de Comodos:</label>
                    <input class="form-control col-md-10 col-sm-10" type="number" name="comodos" value="<?php echo $row_imovel['qnt_comodos'];?>" required>
                  </div>
                  <div class="form-group col-md-3 mb-3">
                    <label>Quantidade de Dormitórios:</label>
                    <input class="form-control col-md-10 col-sm-10" type="number" name="dormitorios" value="<?php echo $row_imovel['dormitorios'];?>" required>
                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <label>Código do Corretor:</label>
                    <input class="form-control col-md-10 col-sm-10" type="text" name="id_cor" value="<?php echo $row_imovel['id_corretor'];?>" required>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="form-group col-md-8 mb-3">
                                <!--Realizando Upload de Imagem-->
                            <label class="control-label">Imagem</label>
                            <input class="form-control" type="file" required name="img" value="<?php echo $row_imovel['img_imovel'];?>">
                  </div>
                  <div class="form-group col-md-4 mb-3">
                    <label>Cidade:</label>
                    <input class="form-control col-md-10 col-sm-10" type="text" name="cidade" value="<?php echo $row_imovel['cidade'];?>" required>
                  </div>  
              </div>
              <div class="row">
                <div class="form-group col-md-3 mb-3">
                  <label>Status Aluguel:</label>
                  <select name="status_aluguel" class="form-select form-control form-control-sm col-md-10 col-sm-10" required>
                    <option value="<?php echo $row_imovel['status_aluguel'];?>"><?php echo $row_imovel['status_aluguel'];?></option>
                    <option value="Alugado">Alugado</option>
                    <option value="Não alugado">Não alugado</option>
                    <option value="Aluguel não concedido">Aluguel não concedido</option>
                  </select>
                </div>

                <div class="form-group col-md-3 mb-3">
                  <label>Valor Aluguel:</label>
                  <input class="form-control col-md-10 col-sm-10" type="text" name="valor_aluguel" value="<?php echo $row_imovel['valor_aluguel'];?>" required>
                </div>

                <div class="form-group col-md-3 mb-3">
                  <label>Status Compra:</label>
                  <select name="status_compra" class="form-select form-control form-control-sm col-md-10 col-sm-10" required>
                    <option value="<?php echo $row_imovel['status_venda'];?>">Comprado</option>
                    <option value="Comprado">Comprado</option>
                    <option value="Não comprado">Não comprado</option>
                    <option value="Compra não concedida">Compra não concedida</option>
                  </select>
                </div>

                <div class="form-group col-md-3 mb-3">
                  <label>Valor Compra:</label>
                  <input class="form-control col-md-10 col-sm-10" type="text" name="valor_compra" value="<?php echo $row_imovel['valor_venda'];?>" required>
                </div>

                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-outline-dark btn-lg btn-block" type="submit" value="Cadastrar">Editar</button>
                </div>

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
      $('.cep').mask('00000-000');
  </script>
</body>
</html>