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
    echo $fecha;
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./fonts/style.css">
    <title>Scientia | Inicio</title>
  </head>





  <section>
    <?php
      echo $fecha;
    ?>
    <div class="container mt-5" >
            <div class="row text-center mt-4">
                <div class="col-12 mt-4 mb-3" id="title-entrevista" >
                    <img src="../images/logos.png" alt="logo de scientia" class="logo">
                </div>
                
            </div>
        </div>


    <header>
      <div class="fixed-top mb-5 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbars">
          <a class="navbar-brand" href="#">SCIENTIA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.htm">Entrevistas <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./index.htm">Ciencias <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./index.htm">Actualidad<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./index.htm">Audivisual<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./index.htm">Nosotros<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
  </section>
