<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Proyecto de F.O.C - Información</title>
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" typne="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.css');?>">
	<style type="text/css"> 
		#space{ padding-top: 20px; }
		.auto-size{ max-width: 100%; max-height: 100%; }
	</style>

</head>
<body>
	<?php include_once('menu.php'); ?>
	
	<div class="container">
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Programa de Simulación<small>  de la línea de espera del comedor universitario</small></h1>
		</div>
		<!-- Inicio Primera Gráfica -->
		<div class="row">
			<div class="col-lg- 8 col-md-8 col-xs-12">
				<div class="panel panel-success">
					<!--<div class="panel-heading">_</div>-->
					<div class="panel-body">
						<?php $this->load->view('flotr_simulacion') ?>
					</div>
					<!--<div class="panel-footer">__</div>-->
				</div>
			</div>
			<div class="col-lg- 4 col-md-4 col-xs-12">
				<div class="panel panel-warning">
					<div class="panel-heading">Parámetros de Control</div>
					<div class="panel-body">
						<center>
							<h6>Función de Probabilidad de la Dist. de Poisson</h6>
							<img class="auto-size" src="<?php echo base_url('images/poisson.png'); ?>">
						</center>
						<br>
						<center>
							<h6>Función de Probabilidad de la Dist. de Llegadas</h6>
							<img class="auto-size" src="<?php echo base_url('images/llegadas.png'); ?>">
						</center>
						<br>
						<p>Probabilidad de n llegadas al sistema. lambda es el promedio en un periodo t.</p>
						<p>De nuestros datos recolectados durante un perido no consecutivo de 5 días, obtuvimos los siguiente promedios de llegadas a la cola de espera
							<table class="table">
								<tr>
									<th>Día</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>total</th>
								</tr>
								<tr>
									<th>Prom</th>
									<td>19</td>
									<td>16.5</td>
									<td>17</td>
									<td>12</td>
									<td>21</td>
									<td>17</td>
								</tr>
							</table>
						</p>
						<hr>
						<p id="cambio">Cambie los valores de <span class="label label-info">Lambda λ</span> o <span class="label label-info">k</span>para modificar la curva.</p>
						<form name="form1" method="POST" action="">
							<div class="col-lg-6 col-sm-6 col-xs 6">
								<span class="label label-success">Lambda</span>
								<div class="input-group">
									<input autocomplete="off" type="text" class="form-control" name="valor" value="<?php echo $valor; ?>" id="lambda" onkeyup="graficar()">
								</div><!-- input group end -->
							</div>
							<div class="col-lg-6 col-sm-6 col-xs 6">
								<span class="label label-success">K</span>
								<div class="input-group">
									<input autocomplete="off" type="text" class="form-control" name="k" value="<?php echo $k; ?>" id="k" onkeyup="graficar()">
								</div><!-- input group end -->
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs 6"><p><span class="label label-success">Lambda</span> es la tasa media de ocurrencia de los sucesos (llegadas o servicio)</p></div>
				<div class="col-lg-6 col-sm-6 col-xs 6"><p><span class="label label-success">K</span> es la ocurrencia del fénomeno</p></div>
			</div>
		</div>
		<!-- Final Primera Gráfica -->
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>