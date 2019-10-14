<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Libros de Coolto</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow&amp;display=swap" rel="stylesheet">
  
  <!-- <link rel="icon" href="../img/Logo.png"> -->
</head>

<body>
  <!-- ACA VIENE EL NAV -->
  <?php
  include_once "partesPhp/Header.php"
  ?>

<!-- ACA VIENE EL VIDEO DEL HOME -->
  <div>
    <div class="container">
      <div class="row"></div>
    </div><video src="Video/Video%20Banner.mp4" autoplay=""width="100%" muted="" loop=""></video>
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
  <?php
  include_once "partesPhp/Footer.php"
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>