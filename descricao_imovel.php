<?php  
    include("conexao.php");
    
    /*SELECIONAR IMOVEIS - INFORMAÇÕES*/
    $id = $_GET['id'];
    $selecionar = "SELECT * FROM imovel WHERE cod_imovel = $id";
    $resultado = mysqli_query($conexao, $selecionar);
    $row_imovel = mysqli_fetch_assoc($resultado);

    /*SELECIONAR CORRETOR - INFORMAÇÕES*/
    // $id_cor = "SELECT id_corretor FROM imovel WHERE cod_imovel = $id";
    $selecionar_cor = "SELECT * FROM corretor WHERE cod_corretor = {$row_imovel['id_corretor']}";
    $resultado_cor = mysqli_query($conexao, $selecionar_cor);
    $row_corretor = mysqli_fetch_assoc($resultado_cor);
?>

<!DOCTYPE html>
<html lang="en">
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
          <a href="index.php" class="navbar-brand">
            <img src="img/viiji.svg" alt="VIJIL">
          <span>VIJIL</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="sobre.php">Sobre</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="entrar.html">Entrar</a>
              </li>
              </ul>
          </div>
      </nav>
  </div>
</div>

      <!--Detalhes do imovel-->

    <main>
        <section class="py-5 container">

            <div class="col-lg-6">
                <h1>Imóvel - Residencial</h1>
                <h4><?php echo $row_imovel['tipo']; ?> - <?php echo $row_imovel['forma_contrato']; ?></h4>
                <p class="lead"><?php echo $row_imovel['cidade']; ?></p>
            </div>

        
            <div class="row row-cols-2">

              <div class="col-md-6">
                <div class="col-md-12 center" >
                  <div class="card-body">
                    <img src="img/<?php echo $row_imovel['img_imovel']; ?>" class="img-fluid" id="imovel_img">
                  </div>
                </div>
                
              </div>
              
              <!-- TABELA INFORMAÇÕES -->
                <div class="table-responsive">
                  <div class="offset-md-1">
                  <table class="table table-hover">
                    <caption>Informações Gerais do Imóvel</caption>

                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row">Endereço: </th>
                        <td><?php echo $row_imovel['end']; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Aluguel: </th>
                        <td>R$ <?php echo $row_imovel['valor_aluguel']; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Compra: </th>
                        <td>R$ <?php echo $row_imovel['valor_venda']; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Área: </th>
                        <td><?php echo $row_imovel['area']; ?> m2</td>
                      </tr>
                      <tr>
                        <th scope="row">Comodos: </th>
                        <td><?php echo $row_imovel['qnt_comodos']; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Dormitórios: </th>
                        <td><?php echo $row_imovel['dormitorios']; ?></td>
                      </tr>
                    </tbody>
                  </table>   
                </div>
                  
                </div>

                
                
            </div>
            
            <div id="team-area">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <h4 class="main-title">Corretor deste Imóvel:</h3>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <a href="https://api.whatsapp.com/send?phone=<?php echo $row_corretor['celular'];?>&text=Oi, vi seu imóvel: <?php echo $row_imovel['end']; echo', número '; echo $row_imovel['num_end']?> no site VIJIL e quero mais informações. Meu nome é: ">
                      <img src="img/<?php echo $row_corretor['img_corretor']; ?>" class="card-img-top" alt="Corretor 1">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row_corretor['nome']; ?></h5>
                      </div>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </section>
    </main>
      
  

</body>
</html>