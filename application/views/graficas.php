<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Proyecto de F.O.C - Información</title>
</head>
<body>
	
	<?php include_once('menu.php'); ?>

	<div class="container">
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Gráficas<small>  Puntos en el plano carteciano</small></h1>
		</div>
		<!-- Inicio Primera Gráfica -->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">1. Distribución de Probabilidades de las Llegadas al Sistema</div>
					<div class="panel-body">
						<?php $this->load->view('flotr1') ?>
					</div>
					<div class="panel-footer">Gráfica que muestre la distribución de probabilidades de las llegadas al sistema comparada con la distribución Poisson con la tasa media de llegadas obtenida.</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">ajustada a los siguientes parámetros</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. de Poisson</h6>
							<img class="auto-size" src="<?php echo base_url('images/poisson.png'); ?>">
							<hr>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- Final Primera Gráfica -->
		<!-- Inicio Segunda Gráfica -->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">2. Distribución de Probabilidades del Tiempo Medio entre Llegadas al Sistema</div>
					<div class="panel-body">
						<?php $this->load->view('flotr2') ?>
					</div>
					<div class="panel-footer">Gráfica que muestre la distribución de probabilidades del tiempo medio entre llegadas al sistema comparada con la distribución exponencial.</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">ajustada a los siguientes parámetros</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. Exponencial</h6>
							<img class="auto-size" src="<?php echo base_url('images/exponencial.png'); ?>">
							<hr>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- Final Segunda Gráfica -->
		<!-- Inicio Tercera Gráfica -->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">3. Distribución de Probabilidades del Servicio (por Servidor)</div>
					<div class="panel-body">
						<?php $this->load->view('flotr3') ?>
					</div>
					<div class="panel-footer">Gráfica que muestre la distribución de probabilidades del servicio (por servidor) comparada con la distribución Poisson con la tasa media de servicio obtenida.</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">ajustada a los siguientes parámetros</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. de Poisson</h6>
							<img class="auto-size" src="<?php echo base_url('images/poisson.png'); ?>">
							<hr>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- Final Tercera Gráfica -->
		<!-- Inicio Cuarta Gráfica -->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">4. Distribución de Probabilidades del Tiempo Medio de Servicio (por Servidor)</div>
					<div class="panel-body">
						<?php $this->load->view('flotr4') ?>
					</div>
					<div class="panel-footer">Gráfica que muestre la distribución de probabilidades del tiempo medio de servicio (por servidor) comparada con la distribución exponencial.</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">ajustada a los siguientes parámetros</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. Exponencial</h6>
							<img class="auto-size" src="<?php echo base_url('images/exponencial.png'); ?>">
							<hr>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- Final Cuarta Gráfica -->
	</div>
	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.css');?>">
	<style type="text/css"> 
		#space{ padding-top: 20px; }
		.auto-size{ max-width: 100%; max-height: 100%; }
		</style>
</body>
</html>