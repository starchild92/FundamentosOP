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
			<h1><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Programa de Simulación<small>  de la línea de espera del comedor universitario</small></h1>
		</div>
		<!-- Inicio Primera Gráfica -->
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
					<!--<div class="panel-heading">_</div>-->
					<div class="panel-body">
						<?php $this->load->view('flotr_simulacion') ?>
					</div>
					<!--<div class="panel-footer">__</div>-->
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">ajustada a los siguientes parámetros</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. de Poisson</h6>
							<img class="auto-size" src="<?php echo base_url('images/poisson.png'); ?>">
						</center>
						<hr>
						<p>Cambie los valores de <span class="label label-info">Lambda</span> o <span class="label label-info">k</span> y presione gráficar para modificar la curva.</p>
						<form name="form1" method="POST" action="<?php echo base_url('simulacion/value'); ?>">
							<div class="col-lg-12">
								<span class="label label-primary">Lambda</span>
								<div class="input-group">
									<input autocomplete="off" type="text" class="form-control" name="valor" value="<?php echo $valor; ?>" id="lambda">
									<span class="input-group-btn">
										<button class="btn btn-info" type="submit">Gráficar</button>
									</span>
								</div><!-- input group end -->
								<span class="label label-primary">K</span>
								<div class="input-group">
									<input autocomplete="off" type="text" class="form-control" name="k" value="<?php echo $k; ?>" id="k">
									<span class="input-group-btn">
										<button class="btn btn-info" type="submit">Gráficar</button>
									</span>
								</div><!-- input group end -->
							</div>
						</form>
						<p>
						<span class="label label-primary">Lambda</span> es la tasa media de ocurrencia de los sucesos (llegadas o servicio)</p>
						<p>
						<span class="label label-primary">K</span> es la ocurrencia del fénomeno</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Final Primera Gráfica -->
	</div>
	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<style type="text/css"> 
		#space{ padding-top: 20px; }
		.auto-size{ max-width: 100%; max-height: 100%; }
	body{ background-image: url("<?php echo base_url('images/fondo-general.png'); ?>"); background-repeat: repeat; }</style>
</body>
</html>