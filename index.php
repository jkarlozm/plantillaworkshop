<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include 'inc/headerCommont.php' ?>
	<link rel="stylesheet" href="css/workshops.css">
	<title>WorkShop con Bootrstrap 3</title>
</head>
<body>
	<!-- Menú -->
	<?php include 'inc/header.php' ?>

	<div class="workshopList">
		<article id="wUno" class="workshop workshopLeft">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 dateInfo">
						<h3 class="highLighted"><strong>W21</strong> 13/14 de abril</h3>
						<h3 class="highLighted">20 plazas</h3>
						<h3 class="highLighted">$99</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 mainInfo">
						<h2>Desarrolla front-end like a boss aprendiendo Bootstrap 3</h2>
						<p>Disfruta de un fin de semana diferente aprendiendo con <a href="#">Marcos González</a> y <a href="#">Armando Sotoca</a>.</p>
						<a href="detail.php" class="btn btnCustom">ME APUNTO!</a>
						<a href="detail.php" class="moreInfoLink">quiero más información</a>
					</div>					
				</div>
			</div>
		</article>
		<article id="wDos" class="workshop workshopRight">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 dateInfo">
						<h3 class="highLighted"><strong>W38</strong> 19/20 de abril</h3>
						<h3 class="highLighted">15 plazas</h3>
						<h3 class="highLighted">$120</h3>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 mainInfo">
						<h2>Desarrolla aplicaciones multiplataforma con Adobe AIR</h2>
						<p>Sorpréndete de lo fácil que puede ser crear apps para iOS y Android con este workshop impartido por <a href="#">Alberto Ordás</a>.</p>
						<a href="detail.php" class="moreInfoLink">quiero más información</a>
						<a href="detail.php" class="btn btnCustom">ME APUNTO!</a>
					</div>					
				</div>
			</div>
		</article>
	</div>

	<!-- Pie de página -->
	<?php include 'inc/footer.php' ?>

	<!-- Script/Javascript -->
	<?php include 'inc/footerCommont.php' ?>
</body>
</html>