
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Página del Proyecto de FOC">
	<meta name="author" content="Luis Pérez">
	<title>Lineas de Espera, Comedor UC</title>
</head>
<!-- NAVBAR ================================================== -->
	<body>
		<?php include_once('menu.php'); ?>

		<div class="container">
			<div class="page-header">
				<h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Informe<small>  examine los resultados del proyecto</small></h1>
			</div>

		<div class="row">
			<div class="col-lg-6">
				<p>A continuación se muestra un enlace para descargar el informe que contiene:
				<ul>
					<li>Datos recolectados y los intrumentos</li>
					<li>Bitácora</li>
					<li>Las Gráficas</li>
					<li>Aproximación de la situación real</li>
					<li>Las Medidas de Eficiencia</li>
					<li>Recomendaciones</li>
					<li>Propuesta</li>
				</ul>
				</p>
			</div>

			<div class="col-lg-6">
				<center>
					<p><h1 style="font-size: 70px; color: rgba(92, 184, 92, 0.8);"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></h1></p>
					<p><a href="<?php echo base_url('informe/descargar'); ?>" class="btn btn-success btn-lg">Descargar Informe</a></p>
				</center>
			</div>
		</div>

		</div>

	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.css');?>">
	<style type="text/css"> #space{ padding-top: 20px; }</style>
</body>
</html>
