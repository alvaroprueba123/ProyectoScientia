<!DOCTYPE html>
<html>
<head>
	<title>FOTOGRAFIA</title>
	<!--styles-->
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
	<!--font awesome-->
	<script src="https://kit.fontawesome.com/7d621f555a.js" crossorigin="anonymous"></script>
	<!--viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<?php
	include('../layouts/layout.php');
?>


<hr>

<section>

    <div class="container"  style="background-image: url('descarga.JPG'); max-height:100%; max-width: 100%; margin:auto; display:block;">

        <div class="row">
              <div class="col-sm" style="display: table; height:200px;">

              </div>

              <div class="col-sm" style="display: table; height:200px;">
                  <a href="actualidad.php" style="color:black; text-decoration-line: none; display: table-cell; vertical-align: middle;"><h1 >Actualidad</h1></a>
              </div>

              <div class="col-sm-4" >
                  <a href="cultura.php" style="color:#FFFF; text-decoration-line: none;"><h5>Cultura</h5></a>
                  <br>
                  <a href="economia.php" style="color:#FFFF; text-decoration-line: none;"><h5>Economia</h5></a>
                  <br>
                  <a href="mundo.php" style="color:#FFFF; text-decoration-line: none;"><h5>Mundo</h5></a>
                  <br>
                  <a href="tecnologia.php" style="color:#FFFF; text-decoration-line: none;"><h5>Tecnologia</h5></a>
              </div>
              


        </div>
    </div>


</section>


<section>

	<div id="main-container__foto">
		<div id="main-container__principal">
			<div id="imagen-principal">
				<span id="imagen-principal__autor">alan turing, 2020</span>
				<img src="img/image1__audiovisual.jfif" alt="">
				<div id="overlay">
					<span id="overlay-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laborum esse omnis corrupti minus distinctio, dolore in vero perspiciatis sunt nihil magni necessitatibus, quisquam ut, porro vel sit enim ullam!.</span>
				</div>
			</div>
			<div id="main-gallery">
				<div id="imagen-1" class="box-image"><img src="img/image2__audiovisual.jfif" alt="" class="imagenes"></div>
				<div id="imagen-2" class="box-image"><img src="img/image3__audiovisual.jfif" alt="" class="imagenes"></div>
				<div id="imagen-3" class="box-image"><img src="img/image4__audiovisual.jfif" alt="" class="imagenes"></div>
				<div id="imagen-4" class="box-image"><img src="img/image5__audiovisual.jfif" alt="" class="imagenes"></div>
				<div id="imagen-5" class="box-image"><img src="img/image6__audiovisual.jfif" alt="" class="imagenes"></div>
				<div id="imagen-6" class="box-image"><img src="img/image7__audiovisual.jfif" alt="" class="imagenes"></div>
			</div>
		</div>
	</div>
		
</section>

<style>
	footer {
    width: 100%;
    background-color: #000;
    color: white;
	padding: 50px;
}
	.logo {
    max-width: 300px;
    max-height: 120px;
}
</style>




<section>
	<?php
		include('../layouts/footer.php');
	?>
</section>
