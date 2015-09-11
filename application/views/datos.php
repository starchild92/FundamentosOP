<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Proyecto de F.O.C - Datos Recolectados</title>
</head>
<body>
	
	<?php include_once('menu.php'); ?>

	<div class="container">
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Datos<small>  Recolección de datos del comedor</small></h1>
		</div>
		<!-- Inicio Primera Fila -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Día 1<small id="rigth">Martes, 04 de Agosto 2015</small></div>
					<div class="panel-body">
						<table id="firstTable" class="table">
							<tbody>
								<tr><td>Cola</td><td>del lado del estacionamiento</td></tr>
								<tr><td>Apertura del Comedor</td><td>12:09:00</td></tr>
								<tr><td>Inicio Captura de Datos</td><td>11:55:00</td></tr>
								<tr><td>Final Captura de Datos</td><td>12:52:00</td></tr>
								<tr><td>Clientes en cola a las 11:57:00:</td><td>123</td></tr>
								<tr><td>Número de Servidores:</td><td>2</td></tr>
							</tbody>
						</table>
						<div id="tabla_ajustada"><table class="table">
							<thead>
								<th colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Intervalos<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></th>
								<th>Núm Clientes	<span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
							</thead>
							<tbody>
								<tr><td>11:55:00</td><td>12:00:00</td><td>16</td></tr>
								<tr><td>12:00:00</td><td>12:05:00</td><td>20</td></tr>
								<tr><td>12:05:00</td><td>12:10:00</td><td>10</td></tr>
								<tr><td>12:10:00</td><td>12:15:00</td><td>18</td></tr>
								<tr><td>12:15:00</td><td>12:20:00</td><td>33</td></tr>
								<tr><td>12:20:00</td><td>12:25:00</td><td>27</td></tr>
								<tr><td>12:25:00</td><td>12:30:00</td><td>30</td></tr>
								<tr><td>12:30:00</td><td>12:35:00</td><td>18</td></tr>
								<tr><td>12:35:00</td><td>12:40:00</td><td>27</td></tr>
								<tr><td>12:40:00</td><td>12:45:00</td><td>8</td></tr>
								<tr><td>12:45:00</td><td>12:50:00</td><td>21</td></tr>
								<tr><td>12:50:00</td><td>12:52:00</td><td>18</td></tr>
								<tr><td>12:55:00</td><td>01:00:00</td><td>-</td></tr>
								<tr><td colspan="2">Media</td><td>19 Clientes</td></tr>
							</tbody>
						</table></div>
					</div>
					<div class="panel-footer">
						<h6>Cantidad Datos: 12</h6>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Día 2 <small id="rigth">Miércoles, 05 de Agosto 2015</small></div>
					<div class="panel-body"></div>
				</div>
			</div>
		</div>
		<!-- Final Primera Fila -->
		<!-- Inicio Segunda Fila -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Día 3 <small id="rigth">Jueves, 06 de Agosto 2015</small></div>
					<div class="panel-body"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Día 4 <small id="rigth">Martes, 04 de Agosto 2015</small></div>
					<div class="panel-body"></div>
				</div>
			</div>
		</div>
		<!-- Final Segunda Fila -->
		<!-- Inicio Tercera Fila -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">Día 5 <small id="rigth">Martes, 04 de Agosto 2015</small></div>
					<div class="panel-body"></div>
				</div>
			</div>
		</div>
		<!-- Final Tercera Fila -->
	</div>
	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<style type="text/css">
		#space{ padding-top: 20px; } #rigth{ float: right; }
		#firstTable tbody tr td:first-child {
			text-align: left;
			font-weight: bold;
		}
		#firstTable tbody tr td:last-child {
			text-align: right;
			font-style: oblique;
		}
	body{ background-image: url("<?php echo base_url('images/fondo-general.png'); ?>"); background-repeat: repeat; }</style>
</body>
</html>