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
		<div class="container">
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs nav-justified" role="tablist">
		    <li role="presentation" class="active"><a href="#dia1" aria-controls="dia1" role="tab" data-toggle="tab">Día 1</a></li>
		    <li role="presentation"><a href="#dia2" aria-controls="dia2" role="tab" data-toggle="tab">Día 2</a></li>
		    <li role="presentation"><a href="#dia3" aria-controls="dia3" role="tab" data-toggle="tab">Día 3</a></li>
		    <li role="presentation"><a href="#dia4" aria-controls="dia4" role="tab" data-toggle="tab">Día 4</a></li>
		    <li role="presentation"><a href="#dia5" aria-controls="dia5" role="tab" data-toggle="tab">Día 5</a></li>
		  </ul>
		  <div class="whitespace"></div>
		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane fade in active" id="dia1">
		    	<div class="row">
		    		<div class="col-lg-8 col-sm-8 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Día 1<small id="rigth">Martes, 04 de Agosto 2015</small></div>
							<div class="panel-body">
								<table id="firstTable" class="table table-condensed">
									<tbody>
										<tr>
											<th>Cola</th><td>del lado del estacionamiento</td>
										</tr><tr>
											<th>Apertura del Comedor</th><td>12:09:00</td>
										</tr>
										<tr>
											<th>Inicio Captura de Datos</th><td>11:55:00</td>
										</tr><tr>
											<th>Final Captura de Datos</th><td>12:52:00</td>
										</tr>
										<tr>
											<th>Clientes en cola a las 11:57:00</th><td>123</td>
										</tr><tr>
											<th>Número de Servidores</th><td>2</td>
										</tr>
									</tbody>
								</table>
								<img class="graficos" src="<?php echo base_url('images/Día 1.png') ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Datos recolectados</div>
								<div class="panel-body">
				    				<table class="table table-condensed">
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
											<tr><td colspan="2">Media</td><td>19 Clientes cada 5 min</td></tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer"><h6>Cantidad Datos: 12</h6></div>
				    		</div>
			    		</div>
			    	</div>
			    </div>
		    <div role="tabpanel" class="tab-pane fade" id="dia2">
		    	<div class="row">
		    		<div class="col-lg-8 col-sm-8 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Día 2<small id="rigth">Miercoles, 05 de Agosto 2015</small></div>
							<div class="panel-body">
								<table id="firstTable" class="table table-condensed">
									<tbody>
										<tr>
											<th>Cola</th><td>del lado del estacionamiento</td>
										</tr><tr>
											<th>Apertura del Comedor</th><td>12:15:00</td>
										</tr>
										<tr>
											<th>Inicio Captura de Datos</th><td>11:55:00</td>
										</tr><tr>
											<th>Final Captura de Datos</th><td>13:00:00</td>
										</tr>
										<tr>
											<th>Clientes en cola a las 11:55:00</th><td>87</td>
										</tr><tr>
											<th>Número de Servidores</th><td>2</td>
										</tr>
									</tbody>
								</table>
								<img class="graficos" src="<?php echo base_url('images/Día 2.png') ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Datos recolectados</div>
								<div class="panel-body">
				    				<table class="table table-condensed">
										<thead>
											<th colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Intervalos<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></th>
											<th>Núm Clientes	<span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
										</thead>
										<tbody>
											<tr><td>11:55:00</td><td>12:00:00</td><td>34</td></tr>
											<tr><td>12:00:00</td><td>12:05:00</td><td>5</td></tr>
											<tr><td>12:05:00</td><td>12:10:00</td><td>18</td></tr>
											<tr><td>12:10:00</td><td>12:15:00</td><td>18</td></tr>
											<tr><td>12:15:00</td><td>12:20:00</td><td>31</td></tr>
											<tr><td>12:20:00</td><td>12:25:00</td><td>33</td></tr>
											<tr><td>12:25:00</td><td>12:30:00</td><td>34</td></tr>
											<tr><td>12:30:00</td><td>12:35:00</td><td>13</td></tr>
											<tr><td>12:35:00</td><td>12:40:00</td><td>6</td></tr>
											<tr><td>12:40:00</td><td>12:45:00</td><td>15</td></tr>
											<tr><td>12:45:00</td><td>12:50:00</td><td>10</td></tr>
											<tr><td>12:50:00</td><td>12:52:00</td><td>12</td></tr>
											<tr><td>12:55:00</td><td>01:00:00</td><td>22</td></tr>
											<tr><td colspan="2">Media</td><td>18 Clientes cada 5 min</td></tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer"><h6>Cantidad Datos: 12</h6></div>
				    		</div>
			    		</div>
			    	</div>
			    </div>
		    <div role="tabpanel" class="tab-pane fade" id="dia3">
		    	<div class="row">
		    		<div class="col-lg-8 col-sm-8 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Día 3<small id="rigth">Jueves, 6 de Agosto de 2015</small></div>
							<div class="panel-body">
								<table id="firstTable" class="table table-condensed">
									<tbody>
										<tr>
											<th>Cola</th><td>del lado del estacionamiento</td>
										</tr><tr>
											<th>Apertura del Comedor</th><td>12:15:00</td>
										</tr>
										<tr>
											<th>Inicio Captura de Datos</th><td>11:50:00</td>
										</tr><tr>
											<th>Final Captura de Datos</th><td>12:55:00</td>
										</tr>
										<tr>
											<th>Clientes en cola a las 11:55:00</th><td>57</td>
										</tr><tr>
											<th>Número de Servidores</th><td>2</td>
										</tr>
									</tbody>
								</table>
								<img class="graficos" src="<?php echo base_url('images/Día 3.png') ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Datos recolectados</div>
								<div class="panel-body">
				    				<table class="table table-condensed">
										<thead>
											<th colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Intervalos<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></th>
											<th>Núm Clientes	<span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
										</thead>
										<tbody>
											<tr><td>11:55:00</td><td>12:00:00</td><td>13</td></tr>
											<tr><td>12:00:00</td><td>12:05:00</td><td>16</td></tr>
											<tr><td>12:05:00</td><td>12:10:00</td><td>12</td></tr>
											<tr><td>12:10:00</td><td>12:15:00</td><td>19</td></tr>
											<tr><td>12:15:00</td><td>12:20:00</td><td>37</td></tr>
											<tr><td>12:20:00</td><td>12:25:00</td><td>31</td></tr>
											<tr><td>12:25:00</td><td>12:30:00</td><td>25</td></tr>
											<tr><td>12:30:00</td><td>12:35:00</td><td>30</td></tr>
											<tr><td>12:35:00</td><td>12:40:00</td><td>12</td></tr>
											<tr><td>12:40:00</td><td>12:45:00</td><td>22</td></tr>
											<tr><td>12:45:00</td><td>12:50:00</td><td>14</td></tr>
											<tr><td>12:50:00</td><td>12:55:00</td><td>16</td></tr>
											<tr><td colspan="2">Media</td><td>17.5 Clientes cada 5 min</td></tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer"><h6>Cantidad Datos: 12</h6></div>
				    		</div>
			    		</div>
			    	</div>
			    </div>
			<div role="tabpanel" class="tab-pane fade" id="dia4">
		    	<div class="row">
		    		<div class="col-lg-8 col-sm-8 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Día 4<small id="rigth">Viernes, 7 de Agosto de 2015</small></div>
							<div class="panel-body">
								<table id="firstTable" class="table table-condensed">
									<tbody>
										<tr>
											<th>Cola</th><td>del lado del estacionamiento</td>
										</tr><tr>
											<th>Apertura del Comedor</th><td>12:20:00</td>
										</tr>
										<tr>
											<th>Inicio Captura de Datos</th><td>11:50:00</td>
										</tr><tr>
											<th>Final Captura de Datos</th><td>13:00:00</td>
										</tr>
										<tr>
											<th>Clientes en cola a las 12:00:00</th><td>69</td>
										</tr><tr>
											<th>Número de Servidores</th><td>2</td>
										</tr>
									</tbody>
								</table>
								<img class="graficos" src="<?php echo base_url('images/Día 4.png') ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Datos recolectados</div>
								<div class="panel-body">
				    				<table class="table table-condensed">
										<thead>
											<th colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Intervalos<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></th>
											<th>Núm Clientes	<span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
										</thead>
										<tbody>
											<tr><td>11:55:00</td><td>12:00:00</td><td>12</td></tr>
											<tr><td>12:00:00</td><td>12:05:00</td><td>10</td></tr>
											<tr><td>12:05:00</td><td>12:10:00</td><td>34</td></tr>
											<tr><td>12:10:00</td><td>12:15:00</td><td>26</td></tr>
											<tr><td>12:15:00</td><td>12:20:00</td><td>30</td></tr>
											<tr><td>12:20:00</td><td>12:25:00</td><td>34</td></tr>
											<tr><td>12:25:00</td><td>12:30:00</td><td>40</td></tr>
											<tr><td>12:30:00</td><td>12:35:00</td><td>23</td></tr>
											<tr><td>12:35:00</td><td>12:40:00</td><td>26</td></tr>
											<tr><td>12:40:00</td><td>12:45:00</td><td>11</td></tr>
											<tr><td>12:45:00</td><td>12:50:00</td><td>11</td></tr>
											<tr><td>12:50:00</td><td>12:55:00</td><td>7</td></tr>
											<tr><td colspan="2">Media</td><td>12 Clientes cada 5 min</td></tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer"><h6>Cantidad Datos: 12</h6></div>
				    		</div>
			    		</div>
			    	</div>
			    </div>
		    <div role="tabpanel" class="tab-pane fade" id="dia5">
		    	<div class="row">
		    		<div class="col-lg-8 col-sm-8 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Día 5<small id="rigth">Lunes, 10 de Agosto de 2015</small></div>
							<div class="panel-body">
								<table id="firstTable" class="table table-condensed">
									<tbody>
										<tr>
											<th>Cola</th><td>del lado del estacionamiento</td>
										</tr><tr>
											<th>Apertura del Comedor</th><td>12:20:00</td>
										</tr>
										<tr>
											<th>Inicio Captura de Datos</th><td>11:55:00</td>
										</tr><tr>
											<th>Final Captura de Datos</th><td>13:00:00</td>
										</tr>
										<tr>
										</tr><tr>
											<th>Número de Servidores</th><td>2</td>
										</tr>
									</tbody>
								</table>
								<img class="graficos" src="<?php echo base_url('images/Día 5.png') ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Datos recolectados</div>
								<div class="panel-body">
				    				<table class="table table-condensed">
										<thead>
											<th colspan="2"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Intervalos<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></th>
											<th>Núm Clientes	<span class="glyphicon glyphicon-user" aria-hidden="true"></span></th>
										</thead>
										<tbody>
											<tr><td>11:55:00</td><td>12:00:00</td><td>29</td></tr>
											<tr><td>12:00:00</td><td>12:05:00</td><td>19</td></tr>
											<tr><td>12:05:00</td><td>12:10:00</td><td>10</td></tr>
											<tr><td>12:10:00</td><td>12:15:00</td><td>15</td></tr>
											<tr><td>12:15:00</td><td>12:20:00</td><td>34</td></tr>
											<tr><td>12:20:00</td><td>12:25:00</td><td>36</td></tr>
											<tr><td>12:25:00</td><td>12:30:00</td><td>30</td></tr>
											<tr><td>12:30:00</td><td>12:35:00</td><td>30</td></tr>
											<tr><td>12:35:00</td><td>12:40:00</td><td>13</td></tr>
											<tr><td>12:40:00</td><td>12:45:00</td><td>11</td></tr>
											<tr><td>12:45:00</td><td>12:50:00</td><td>16</td></tr>
											<tr><td>12:50:00</td><td>12:55:00</td><td>23</td></tr>
											<tr><td colspan="2">Media</td><td>21 Clientes cada 5 min</td></tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer"><h6>Cantidad Datos: 12</h6></div>
				    		</div>
			    		</div>
			    	</div>
			    </div>
		    </div>
		  </div>
		</div>
	</div>
	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.css');?>">
	<style type="text/css">
		#space{ padding-top: 20px; } #rigth{ float: right; }
		.whitespace{ margin-top: 10px;}
		table tr * { text-align: left; }
		.graficos{
			width: 100%;
			height: auto;
		}
	</style>
</body>
