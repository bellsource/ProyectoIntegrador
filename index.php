<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Libros de Coolto</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow&amp;display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" href="../img/Logo.png"> -->
</head>

<body>
  <!-- ACA VIENE EL NAV -->
  <?php
  include_once "partesPhp/Header.php"
  ?>

<!-- ACA VIENE EL VIDEO DEL HOME -->
  <div style="text-align:center;">
    <div class="container">
      <div class="row"></div>
    </div><video src="Video/Video%20Banner.mp4" autoplay="" muted="" loop=""></video>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-md-5 p-3 d-flex flex-column justify-content-center" style="">
          <h1 class=""><b>Biblioteca virtual</b></h1>
          <p class="mb-0">Elije tus libros favoritos</p><img class="img-fluid d-block mx-auto" src="img/Botón de carrito.png">
        </div>
        <div class="col-lg-4 p-3" style="">
          <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block w-75 mx-auto" src="img/01.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/02.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/03.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/04.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/05.png"> </div>
              <div class="carousel-item"> <img class="d-block w-75 mx-auto" src="img/06.png"> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
            <a class="carousel-control-next" role="button" data-slide="next" href="#carousel2">
              <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
            
          </div><a class="btn btn-outline-secondary btn-lg text-center w-100" href="#" style=""><b>Comprar</b></a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <ul class="list-unstyled">
            <li> <a href="#">Editoriales</a> </li>
            <li> <a href="#">Envios al interior del país</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <h5> <b>Medios de pago</b></h5>
          <ul class="list-unstyled">
            <li> <a href="#">Tarjeta de crédito</a> </li>
            <li> <a href="#">Efectivo</a> </li>
            <li> <a href="#">Otros</a> </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <h5> <b>Política de privacidad</b></h5>
          <p class="mb-0" contenteditable="true"> Términos y condiciones</p>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
          <img class="img-fluid d-block rounded-circle border-0 w-50" src="img/Facebook_UI-03-512.png">
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 mt-2"><b>© 2019 Copyright. Derechos reservados</b></p>
        </div>
      </div>
    </div>
  </div>
  <footer class="row"></footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>