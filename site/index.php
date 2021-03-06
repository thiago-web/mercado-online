<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Site para Mercado" />
  <meta name="author" content="Thiago Henrique da Silva Pinto" />
  <title>Armazém Ponto Kent · Online</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- scripts -->
  <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Links CSS -->
  <!-- stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
      background-color: #86ea86;
    }

    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
    .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

<body>
  <div class="jumbotron">
    <div class="container text-center">
      <h1 style="font-family: Times New Roman;">Armazém Ponto Kent</h1>
      <p>Missão, Visão e Valores</p>
    </div>
  </div>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Pagina Inicial</a></li>
          <!-- <li><a href="#">Deals</a></li> -->
          <li><a href="#">Sobre nós</a></li>
          <li><a href="contact.html">Contato</a></li>
          <li><a href="loja-online/sign-in/login-page">Compre Online</a></li>
          <li><a href="loja-online/sign-in/index.html">Compre Online</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php


          if (!empty($_SESSION['logado'])) {
          ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Minha Conta</a></li>
            <li><a href=""  onClick="document.getElementByName('logout-btn').submit();" name="logout-btn" value= "logout" type="submit" ><span  class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            <li><a href="" type="submit" >
              <span class="badge bg-dark text-white ms-1 rounded-pill">0</span><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
            <form action="">
              
              <button type="submit" class="btn btn-outline-dark btn-sm" name="logout-btn" value="logout" >
                <span  class="glyphicon glyphicon-log-out"></span>Sair
              </button>

            <li><a href="#"><span class="badge bg-dark text-white ms-1 rounded-pill">0</span><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
            <form action="">
              <input type="submit" class="btn btn-outline-dark btn-sm" name="logout-btn" value="logout">
            </form>

            <?php
            if (isset($_REQUEST['logout-btn'])) {
              session_destroy();
            ?>
              <script>
                location.reload();
              </script>
            <?php
            }
          } else {
            ?>
            <li><a href=<?php echo'loja-online/sign-in/login-page.php' ?>><span class="glyphicon glyphicon-user"></span> Logar Na Conta</a></li>
              
            <li><a href=<?php echo "/mercado-online/loja-online/login/login-page.php" ?>><span class="glyphicon glyphicon-user"></span> Logar Na Conta</a></li>


          <?php
          } ?>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Iframe para as Promoções -->
  <div class="embed-responsive embed-responsive-16by9">
    <iframe name="embed" class="embed-responsive-item" src="/mercado-online/loja-online/sign-in/loja-pagina-inicial/paginas-produtos/promocao/previa-promocao.html" allowfullscreen></iframe>
  </div>


  <br><br>
  <footer class="" style="background-color: #404040;">
    <div class="container-fluid">
      <div class="row">

        <!-- useful links -->
        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
          <h4>Atalhos </h4>
          <ul class="row footer-links">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <li><a href="#">Página Inicial</a></li>
              <li><a href="#">Sobre Nós</a></li>
              <li><a href="">Compre Online</a></li>
              <li><a href="#">Minha Conta</a></li>
            </div>
          </ul>
        </div>

        <!-- recent news -->
        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
          <h4>Localização</h4>

          <div class="row footer-widget">
            <div class="col-md-8 col-sm-8 col-xs-8">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7361.364225972973!2d-46.77054261512903!3d-22.70287476776588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c921eea0f34b4d%3A0xec7f3e6eadc1c273!2sArmaz%C3%A9m%20Ponto%20Kent!5e0!3m2!1spt-BR!2sbr!4v1622655770818!5m2!1spt-BR!2sbr" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div> <!-- /.footer-news -->
        </div> <!-- /.footer-widget -->

        <!-- news-letter -->
        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
          <h4>Novidades e Atualizações</h4>

          <p>Inscreva-se em nossa lista de e-mail para obter as últimas atualizações e ofertas</p>
          <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Endereço de e-mail">
            <span class="input-group-addon">
              <i class="fa fa-paper-plane fa-fw"></i>
            </span>
          </div>
          <p>Nós respeitamos a sua privacidade</p>
        </div> <!-- /.footer-widget -->

        <!-- about avada agency -->
        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
          <h4>Armazém Ponto Kent </h4>

          <p>
            Missão, Visão, Valores
          </p>

          <div class="footer-address">
            <p>
              Cel: (19)9 1919-1919 - Responsável <br>

            </p>
            <p>Email: example@mail.com </p>
          </div>

          <div class="row">
            <div class="col-md-12">
              <ul class="footer-share-button">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul> <!-- /.footer-share-button -->
            </div>
          </div>
        </div> <!-- /.footer-widget -->
      </div>
    </div>
  </footer>
</body>

</html>