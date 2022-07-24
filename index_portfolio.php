<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desafio</title>

    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">

    <script src="validaCampo.js"></script>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    
    <main>

      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-item" href="https://bulma.io">
              <img src="assets/images/logo-in8-dev.svg" width="112" height="28">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#cadastro">cadastro</a></li>
              <li><a href="#lista">lista</a></li>
              <li><a href="#sobremim">sobre mim</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section bg-dark-60 portfolio-page-header parallax-bg" id="home" data-background="assets/images/index-image.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="mb-40 titan-title-size-4">ESTÁGIO</div>
            <div class="mb-30 titan-title-size-1">PROVA DE SELEÇÃO</div>
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module-small bg-info">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 text-center">
                <h4 class="mb-20" id="cadastro">CADASTRO</h4>

                <form id="cadastro" name="cadastro" method="post" action="php/cadastro.php" onsubmit="return validaCampo(); return false;">
                  <table>
                  <tr>
                    <td>Nome:</td>
                    <td><input name="nome" type="text" id="nome" /></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><input name="email" type="text" id="email" /></td>
                  </tr>
                  <tr>
                    <td>Data de nascimento:</td>
                    <td><input name="nascimento" type="date" id="nascimento" /></td>
                  </tr>
                  <tr>
                    <td>Telefone</td>
                    <td><input name="telefone" type="text" id="telefone" /></td>
                  </tr>
                  <tr>
                    <td><input name="cadastrar" type="submit" id="cadastrar" value="CADASTRAR" /></td>
                  </tr>                   
                  </table>
                 </form>
              </div>
            </div>
          </div>
        </section>
        <section class="module-small">
          <div class="container" has-background-primary>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 text-center has-text-dark">
                <h4 class="mb-20" id="lista">LISTA DE CADASTRO</h4>

                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Telefone</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php include 'php/exibicao.php'; ?>

                  </tbody>
                  
                </table>

              </div>
            </div>
          </div>
        </section>
        <section class="module-small bg-dark" data-background="assets/images/rodape-desktop.jpg">
          <div class="container">
            <div class="row"  id="sobremim">
              <div class="col-sm-6 col-sm-offset-3 text-center">
                <h5 class="mb-10">Fulano Beltrano de Oliveira da Silva</h5>
                <h5 class="mb-10">fulanobos@gmail.com</h5>
                <h5 class="mb-10">(31) 9 9666-1111</h5>
                <h5 class="mb-10">Faculdade de Belo Horizonte</h5>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>