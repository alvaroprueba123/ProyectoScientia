<!DOCTYPE html>
<html>
<head>
	<title>FOTOGRAFIA</title>
	<!--styles-->
	<link rel="stylesheet" type="text/css" href="estilos.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<section>
	<?php
		include('../layouts/layout.php');
	?>
	</section>


	<style>
    #subtitle{
		font-size:35px;
		}
	</style>

	<section>
		<div class="container"  style="background-image: url('../imagenes/portadas/fotografia.png'); max-height:100%; max-width: 100%; background-repeat: no-repeat;background-size:100% 100%; padding:45px 0px 45px 0px; ">
		<div class="row w-100">

			<div class="col-md-3" style="display: table;height:200px;margin-left: 75px;">
			<a style="text-decoration-line: none; display: table-cell; vertical-align: middle;"><h1 style="color:white; font-size:50px; text-align:center">Audiovisual</h1></a>
			</div>

			<div class="col-md-3" style="margin-left: 20px;">
			<br>
			<a href="fotografia.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Fotografia</h5></a>
			<br>
			<a href="podcast.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Podcast</h5></a>
			<br>
			<a href="videoreportaje.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Videoreportaje</h5></a>
			</div>

		</div>
		</div>
		<br>
	</section>


	<section>
		<div id="main-container__foto">
			<div id="main-container__principal" style="background:#DEE9E9; padding: 15px 25px 30px 25px;">
				<div id="imagen-principal">
					<span id="imagen-principal__autor">alan turing, 2020</span>
					<img src="../imagenes/audiovisual/fotografia/imgfot1.jpg" alt="">
					<div id="overlay">
						<span id="overlay-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero laborum esse omnis corrupti minus distinctio, dolore in vero perspiciatis sunt nihil magni necessitatibus, quisquam ut, porro vel sit enim ullam!.</span>
					</div>
				</div>
				<div id="main-gallery">
					<div id="imagen-1" class="box-image"><a href=""><img src="../imagenes/audiovisual/fotografia/imgfot1.jpg" alt="" class="imagenes"></a></div>
					<div id="imagen-2" class="box-image"><a href=""><img src="../imagenes/audiovisual/fotografia/imgfot2.jpg" alt="" class="imagenes"></a></div>
					<div id="imagen-3" class="box-image"><a href="../audiovisual/fotografia_art.php"><img src="../imagenes/audiovisual/fotografia/imgfot3.jpg" alt="" class="imagenes"></a></div>
					<div id="imagen-4" class="box-image"><a href=""><img src="../imagenes/audiovisual/fotografia/imgfot4.jpg" alt="" class="imagenes"></a></div>
					<div id="imagen-5" class="box-image"><a href=""><img src="../imagenes/audiovisual/fotografia/imgfot5.jpg" alt="" class="imagenes"></a></div>
					<div id="imagen-6" class="box-image"><a href=""><img src="../imagenes/audiovisual/fotografia/imgfot6.jpg" alt="" class="imagenes"></a></div>
				</div>
			</div>
		</div>
		<br>
	</section>

	<section>
		<?php
			include('../layouts/footer.php');
		?>
	</section>
