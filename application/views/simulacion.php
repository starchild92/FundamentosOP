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
		.graficos{
			width: 100%;
			height: auto;
		}
		h4 { font-weight: bold; }
		div .panel-body_{
			padding: 5px !important;
		}
	</style>
</head>
<body>
	<?php include_once('menu.php'); ?>
	
	<div class="container">
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Programa de Simulación<small>  de la línea de espera del comedor universitario</small></h1>
		</div>
		<!-- inicio del simulador -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">El Modelo que Simula este Sistema se define como:</div>
					<div class="panel-body panel-body_">

						<div class="col-lg-3 col-md-3 col-xs-12">
							<h4>Reloj de Simulación</h4>
							<p>Tiempo <span class="label label-default">t</span>, transcurrido en segundos hasta el momento</p>
							<h4>Estado del Sistema</h4>
							<p><span class="label label-default"><i>N(t)</i></span>= Número de personas en el comedor en el tiempo <span class="label label-default">t</span></p>
						</div>
						
						<div class="col-lg-3 col-md-3 col-xs-12">
							<h4>Posibles Estados</h4>
							<p>0 ≤ N(t) ≤ ∞</p>
							<h4>Formula de Transición de Estado</h4>
							<div class="col-lg-3" style="padding: 0px;"><p>N(t + t<sub>e</sub>)</p></div>
							<div class="col-lg-9"><p>N(t) + 1, ocurre una llegada en el tiempo <span class="label label-default">t</span></p>
							<p>N(t) - 1, ocurre una terminación del servicio en el tiepo <span class="label label-default">t</span></p></div>
						</div>

						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4>Método generador de Eventos</h4>
							<div class="col-lg-6" style="padding: 0px;"><p>Para el <b>tiempo entre llegadas</b> al sistema se usará un generador de números aleatorios distribuidos de manera exponencial con media <span class="label label-default">15</span><center>p = −15ln(r) µs</center></p></div>
							<div class="col-lg-6" style="padding: 0px;"><p>Para el <b>tiempo de servicio</b> se usará un generador de números aleatorios distribuidos de manera exponencial con media <span class="label label-default">13</span><center>q = −13ln(r) µs</center></p></div>
							<p>t<sub>e</sub> ∈ {p, q}</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-lg-6">
							<div class="input-group">
								 <span class="input-group-addon" id="sizing-addon1">@</span>
								 <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="input-group">
								 <span class="input-group-addon" id="sizing-addon1">@</span>
								 <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
							</div>
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Tiempo <span class="label label-default">t</span></th>
								<th>N(<i>t</i>)</th>
								<th>r<sub>llegada</sub></th>
								<th>Sig. tiempo entre llegadas</th>
								<th>r<sub>servicio</sub></th>
								<th>Sig. tiempo de servicio</th>
								<th>Sig. Llegada</th>
								<th>Sig. Salida</th>
								<th>Sig. Evento</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$t = 0.00;
							$nt = 0.00;

							//Para el Método Congruencial Mixto
							$semilla = 15; //Xn+11
							$a = 13;
							$c = 16;
							$mod = 100;

							$metodo_congruente = [];

							for ($n=0; $n < 50; $n++) { 
								$numero_uniforme = (($a * $semilla) + $c) % $mod;
								$semilla = $numero_uniforme;
								$metodo_congruente[] = $numero_uniforme/$mod;
							}



							for ($i=0; $i < 20; $i++) {
						?>
							<tr>
								<td><?php echo $t; ?></td>
								<td><?php echo $nt; ?></td>
								<td><?php echo number_format($metodo_congruente[$i], 3); ?></td>
								<td><?php 
								echo number_format((-15 * log($metodo_congruente[$i])), 4); ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php //$this->load->view('flotr_simulacion') ?>
					
				</div>
			</div>
		</div>
		<!-- Final del Row Superior -->

		<div class="row">
			<div class="col-lg-6" style="float: none; margin: 0 auto;">
				<div class="page-header"><h3>Dinámica del comedor hecho en un GIF</h3></div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6" style="float: none; margin: 0 auto;">
				<img class="graficos" src="<?php echo base_url('images/modelo_.gif') ?>">
			</div>
		</div>
	</div>
	<?php include_once('footer.php'); ?>
</body>
</html>