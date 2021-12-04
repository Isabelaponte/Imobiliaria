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
                  <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="sobre.html">Sobre</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="entrar.html">Entrar</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="cadastro.html">Cadastro</a>
              </li>
              </ul>
          </div>
      </nav>
  </div>
</div>

      <!-- SLIDER -->
    <div class="container" id="slider-container">
        <div id="slider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#slider"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1" 
            ></button>
            <button
              type="button"
              data-bs-target="#slider"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#slider"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/01.jpg" class="d-block w-100" alt="Casa 1" />
              <div class="carousel-caption">
                <h5>Casas planejadas</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/12.jpg" class="d-block w-100" alt="Casa 2" />
              <div class="carousel-caption">
                <h5>Projetos Complexos</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/13.jpg" class="d-block w-100" alt="Casa 3" />
              <div class="carousel-caption">
                <h5>Projetos Inovadores</h5>
                
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="prev"
          >
            <i class="bi bi-chevron-compact-left"></i>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="next"
          >
            <i class="bi bi-chevron-compact-right"></i>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </div>

      <!-- DESTAQUES -->
      <div class="container" id="featured-container">
        <div class="col-12">
          <h2 class="title primary-color">Imóveis em Destaque</h2>
          <p class="subtitle secondary-color">
            Conheça nossos projetos mais desafiadores
          </p>
        </div>

        <div class="col-12" id="featured-images">
          <div class="row g-4">
            <div class="col-12 col-md-4">
              <img src="img/14.jpg" alt="Projeto 1" class="img-fluid"/>
              <div class="banner-content">
                <h3>Casa - Aluguel</h3>
                <a href="1.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <img src="img/15.jpg" alt="Projeto 2" class="img-fluid" />
              <div class="banner-content">
                <h3>Casa - Compra</h3>
                <a href="2.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <img src="img/16.jpg" alt="Projeto 3" class="img-fluid" />
              <div class="banner-content">
                <h3>Casa - Aluguel</h3>
                <a href="3.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <img src="img/07-ap.jpg" alt="Projeto 4" class="img-fluid" />
              <div class="banner-content">
                <h3>Apartamento - Aluguel</h3>
                <a href="4.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <img src="img/08-ap.jpg" alt="Projeto 5" class="img-fluid" />
              <div class="banner-content">
                <h3>Apartamento - Aluguel</h3>
                <a href="5.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <img src="img/17.jpg" alt="Projeto 6" class="img-fluid" />
              <div class="banner-content">
                <h3>Casa - Compra</h3>
                <a href="6.html" class="btn btn-dark">Ver Imóvel</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- INFO -->
      <div class="container" id="info-container">
        <div class="col-12">
          <h2 class="title primary-color">Detalhes Importantes</h2>
          <p class="subtitle secondary-color">
            Sobre a nossa linda equipe
          </p>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-md-5" id="info-banner">
              <img src="img/turminha_do_balacobaco.jpeg" alt="Informações" class="img-fluid" />
            </div>
            <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
              <div class="row">
                <div class="col-12">
                  <h2 class="title">Sobre o site:</h2>
                  <p class="subtitle secondary-color">
                    Esse site é um projeto criado por alunos do terceiro ano do ETIM Desenvolvimento de Sistemas da ETEC Professora Anna de Oliveira Ferraz, para fins de trabalho de conclusão de curso (TCC) no ano de 2021.
                  </p>
                  <p class="subtitle secondary-color">
                    Todas as imagens usadas nesse site são somente para fins ilustrativos e não lucrativos. Não possuímos qualquer direito sobre as mesmas.
                  </p>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
          <div class="row">
            <!-- FOOTER TOP -->
            <div class="col-12" id="footer-top">
              <div class="row justify-content-between">
                <div class="col-4">
                  <h2>
                    VIJIL
                  </h2>
                </div>
              </div>
            </div>
            <!-- FOOTER DETAILS -->
            <div class="col-12" id="footer-details">
              <div class="row">

                <div class="col-12 col-md-4" id="contact-container">
                  <h4>Formas de contato</h4>
                  <p class="secondary-color">(16)4002-8922</p>
                  <p class="secondary-color">exemplo@email.com</p>
                </div>
                <div class="col-12 col-md-4" id="links-container">
                  <div class="row">
                    <p class="float-right">
                      <a href="#">Voltar ao topo</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- FOOTER BOTTOM -->
            <div class="col-12" id="footer-bottom">
              <div class="row justify-content-between">
                <div class="col-12 col-md-3">
                  <p class="secondary-color">iMovi &copy; 2021</p>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </footer>





    <!--importação js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>