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
                            <a class="nav-link" href="#">Lista de Corretores</a>
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


    <section class="py-5 container">
        <div class="container">
            <div class="container-principal-produtos">
                <h4 class="page-header">LISTA DE CORRETORES</h4>
                <form class="form-inline" action="pesquisa_cor.php" method="POST">
                    <div class="">
                    <input type="text" class="form-control form-control-sm col-md-8 col-sm-10" name="c_pesquisa" placeholder="Pesquisar Corretor" required="">
                    <input class="btn btn-sm" type="submit" name="btn_pesquisa">
                    </div>
                </form>
                <hr>
                <!--Controlador de tamanho e margem da tabela-->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Celular</th>
                        </thead>
                        <tbody>
                            
                        <?php
                            //Chamar o BD
                            include("conexao.php");
                            $bd = mysqli_select_db($conexao, "bd_imobiliaria");

                            $sql = "SELECT * FROM corretor ORDER BY cod_corretor DESC";

                            //Pegando os dados da tabela 
                            $resultado = mysqli_query($conexao, $sql);
                            //escrever o WHILE a partir daqui :)

                            while ($linha = mysqli_fetch_array($resultado)) 
                            {
                                echo "<tr>";
                                    echo '<td>'.$linha['cod_corretor'].'</td>';
                                    echo '<td>'.$linha['nome'].'</td>';
                                    echo '<td>'.$linha['email'].'</td>';
                                    echo '<td>'.$linha['celular'].'</td>';
                                    //Ações
                                    echo "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cod_corretor]'>Mostrar</button>
                                    <button type='button' class='btn btn-sm btn-warning' data-toggle='modal' data-target='#editar$linha[cod_corretor]'>Editar</button>
                                    <button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#apagar$linha[cod_corretor]'>Deletar</button>
                                    </td>
                                    ";

                                echo "</tr>";
                            
                        ?>

                        <!-- Inicio do Modal - Mostrar -->
                        <div class="modal fade" id="myModal<?php echo $linha['cod_corretor'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel">Imóvel: <?php echo $linha ['cod_corretor'];?></h3>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <h4><img src="img/<?php echo $linha['img_corretor'];?>" width="100%" height="20%"></h4><br><br>
                                        <b>Nome: </b><?php echo $linha['nome'];?><br><hr>
                                        <b>Email: </b><?php echo $linha['email'];?><br><hr>
                                        <b>Celular: </b><?php echo $linha['celular'];?><br><hr>
                                        <b>Senha: </b><?php echo $linha['senha'];?><br><hr>
                                    </div>

                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Final Modal -->

                        <!-- Inicio Modal Editar -->
                        <form action="editar_corretores.php?id='<?php $linha['cod_corretor']?>'" method="POST">
                        <input type="hidden" name="cod_corretor" value="<?php echo $linha['cod_corretor'];?>">
                        <div class="modal fade" id="editar<?php echo $linha['cod_corretor'];?>" tabindex="-1" role="dialog" aria-labelledby='apagarLabel'>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Você tem certeza?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="" class="btn btn-default">Editar</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- Final Modal Editar -->

                        <!-- Modal Excluir -->
                        <form action="deletarCadastro_corretor.php" method="post">
                            <input type="hidden" name="cod_corretor" value="<?php echo $linha['cod_corretor'];?>">
                        <div class="modal fade" id="apagar<?php echo $linha['cod_corretor'];?>" tabindex="-1" role="dialog" aria-labelledby='apagarLabel'>
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Você tem certeza?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-default" name="apagarBtn">Excluir</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- Final Modal Excluir -->
                        <?php
                            }
                            mysqli_close($conexao);
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    <!--Fechando container bootstrap-->
  <?php include("dep_query.php");?>
    </section>
</body>

</html>