<?php
  date_default_timezone_set("America/Lima");
  $m=0;
  $m=date('m');
  switch ($m) {
      case '1':
          $mes='Enero';
          break;
      case '2':
          $mes='Febrero';
          break;
      case '3':
          $mes='Marzo';
          break;
      case '4':
          $mes='Abril';
          break;
      case '5':
          $mes='Mayo';
          break;
      case '6':
          $mes='Junio';
          break;
      case '7':
          $mes='Julio';
          break;
      case '8':
          $mes='Agosto';
          break;
      case '9':
          $mes='Setiembre';
          break;
      case '10':
          $mes='Octubre';
          break;
      case '11':
          $mes='Noviembre';
          break;                                                                       
      default:
          $mes='Diciembre';
          break;
  }
  $fecha=date('d').', '.$mes.' del '.date('Y');
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <style>
    /* --- Clase que agregaremos cuando el usuario haga scroll --- */
    .menu-fixed {
    position:fixed;
    z-index:1000;
    top:0;
    /*max-width:1000px;*/
    left:0;
    width:100%;
    background: #333333;
    
  }
  </style>

  <script>
    $(document).ready(function(){
      var altura = $('.menu').offset().top;
      $(window).on('scroll', function(){
        if ( $(window).scrollTop() > altura ){
          $('.menu').addClass('menu-fixed');
        } else {
          $('.menu').removeClass('menu-fixed');
        }
      });
    });
  </script>

  <section>
    <div >
    <div class="row col-md-12">
      <div class="col-sm-3" >
        <p style="font-weight: bold; margin:10px 0px 0px 20px"><?php echo $fecha; ?></p> 
      </div>
      <div class="col-sm-6">
        <p style="font-weight: bold; margin:10px 0px 0px 15px; text-align:center;">Nuevo: Lorem ipsum dolor, sit amet quia hic!</p>
      </div>
    </div>
      <div class="row col-md-12">
        <center>
        <div class="col-md-6" >
          <img src="../imagenes/logo/logo_hori.png"  style="max-width: 67%; max-height: 67%;">
        </div>  
        </center>
      </div>
    </div>
    <header style="background:#333333">
      <nav class="menu" >
        <nav class="navbar navbar-expand-lg navbar-light bg-#333333" data-toggle="affix" style="margin: 0px 110px 0px 110px;" >
          <button class="navbar-toggler" type="button" style="border-color:white;" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color:white">Scientia</span>
          </button>
          <div class="collapse navbar-collapse navbar-nav nav-fill w-100 collapse" id="navbarsExample11">
            <ul class="navbar-nav nav-fill w-100 nav-justify" style="list-style-type:disc; color:white;" >
              <li class="nav-item active">
                  <a class="nav-link" href="../index/inicio.php"><span style="color:white; font-size:25px;font-weight: bold">Inicio</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="../entrevistas/entrevistas.php"><span style="color:white; font-size:25px;font-weight: bold">Entrevistas</span></a>
              </li>

              <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" ><span style="color:white; font-size:25px;font-weight: bold">Ciencias</span></a>
                <div class="dropdown-menu w-100" style="background:#333333;">
                <a class="dropdown-item" href="../ciencias/becas.php" ><span style="color:white; font-size:25px;">Becas</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../ciencias/ciencias.php"><span style="color:white; font-size:25px;">Ciencias</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../ciencias/cientifica.php"><span style="color:white; font-size:25px;">Comunidad <br> cientifica</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../ciencias/review.php"><span style="color:white; font-size:25px;">Reviews</span></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" ><span style="color:white; font-size:25px;font-weight: bold">Actualidad</span></a>
                <div class="dropdown-menu w-100" style="background:#333333;">
                <a class="dropdown-item" href="../actualidad/cultura.php" ><span style="color:white; font-size:25px;">Cultura</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../actualidad/economia.php"><span style="color:white; font-size:25px;">Economia</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../actualidad/mundo.php"><span style="color:white; font-size:25px;">Mundo</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../actualidad/tecnologia.php"><span style="color:white; font-size:25px;">Tecnologia</span></a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span style="color:white; font-size:25px;font-weight: bold">Audiovisual</span></a>
                <div class="dropdown-menu w-100" style="background:#333333;">
                <a class="dropdown-item" href="../audiovisual/fotografia.php" ><span style="color:white; font-size:25px;">Fotografia</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../audiovisual/podcast.php"><span style="color:white; font-size:25px;">Podcast</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../audiovisual/videoreportaje.php"><span style="color:white; font-size:25px;">Videoreportaje</span></a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#"><span style="color:white; font-size:25px; font-weight: bold">Nosotros</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </nav>
    </header>
  </section>
  <br>


  
  <!--
    /////////  REALIZADO POR:   ALBERTO VELASQUEZ /////////////
    ///////  PARA CONTACTO:     alberto.vs@outlook.com  ///////
    ///////////////  ASUNTO: DESARROLLO WEB  //////////////////
    ///////////////////////////////////////////////////////////
    /////////  REALIZADO POR:   ALBERTO VELASQUEZ /////////////
    ///////  PARA CONTACTO:     alberto.vs@outlook.com  ///////
    ///////////////  ASUNTO: DESARROLLO WEB  //////////////////
  -->


