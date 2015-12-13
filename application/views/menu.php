<?php
	#obtener el ultimo segmento de la url para comparar y activar en el menu automaticamente
	$actual = current_url();
	$final = end(explode('/', $actual));
?>
 <link rel="shortcut icon" href="<?php echo base_url('images/ico.png'); ?>">
<style type="text/css">body { padding-top: 15px; padding-bottom: 20px; }</style>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url('inicio'); ?>" style="color: rgb(0, 147, 221);"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>  Queues</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li <?php if ($final == 'principal') { echo "class='active'";} ?> ><a <?php if ($final == 'Principal') { echo "href='#'"; }else{ echo "href='".base_url('inicio')."'"; } ?> ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Inicio</a></li>
					<li <?php if ($final == 'enunciado') { echo "class='active'"; } ?> ><a <?php if ($final == 'enunciado') { echo "href='#'"; }else{ echo "href='".base_url('enunciado')."'"; } ?> ><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>  Enunciado</a></li>
					<li <?php if ($final == 'datos') { echo "class='active'"; } ?> ><a <?php if ($final == 'datos') { echo "href='#'"; }else{ echo "href='".base_url('datos')."'"; } ?> ><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>  Datos</a></li>
					<li <?php if ($final == 'graficas' || $final == 'value') { echo "class='active'"; } ?> ><a <?php if ($final == 'graficas') { echo "href='#'"; }else{ echo "href='".base_url('graficas')."'"; } ?> ><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>  Gráficas</a></li>
					<li <?php if ($final == 'informe') { echo "class='active'"; } ?> ><a <?php if ($final == 'informe') { echo "href='#'"; }else{ echo "href='".base_url('informe')."'"; } ?> ><span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Informe</a></li>
					<li <?php if ($final == 'simulacion') { echo "class='active'"; } ?> ><a <?php if ($final == 'simulacion') { echo "href='#'"; }else{ echo "href='".base_url('simulacion')."'"; } ?> ><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>  Simulación</a></li>
					<li <?php if ($final == 'informacion') { echo "class='active'"; } ?> ><a <?php if ($final == 'informacion') { echo "href='#'"; }else{ echo "href='".base_url('informacion')."'"; } ?> ><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  Info</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>