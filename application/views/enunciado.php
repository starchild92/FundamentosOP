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
				<h1><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Enunciado<small>  Descripción y requisitos del proyecto</small></h1>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Descripción del Problema</div>
					<div class="panel-body">
						El comedor universitario de la universidad de Carabobo es el encargado de suministrar una alimentación balanceada y variada con productos de calidad a la comunidad universitaria. Sin embargo, es notable la longitud de las líneas de espera que se observan a las horas de almorzar, por esta razón se contrata su empresa <a style="color: rgb(92, 184, 92); text-shadow: none;"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>  Queues</a>, como analistas de líneas de espera para hacer la evaluación de las mismas y generar propuesta que mejoren el funcionamiento de las líneas de espera.
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Observaciones
					</div>
					<div class="panel-body">
						<ul><li>El proyecto debe ser realizado en equipos de tres (3) estudiantes.</li>
						<li>Los equipos que no cumplan con las consideraciones y observaciones establecidas para la elaboración del proyecto tendrán un porcentaje de descalificación sobre la nota total obtenida.</li>
						<li>Los equipos que entreguen sus proyectos después de la fecha tope establecida tendrán dos (2) puntos de descalificación (sobre la nota total obtenida) por cada día continuo de retraso.</li></ul>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Entrega</div>
					<div class="panel-body">
						La presentación del proyecto y la simulación se hará el día el día viernes 16 de octubre 2015. La entrega consiste de un archivo comprimido llamado “proyectoColas”, que contendrá:
						<ul>
						<li>Informe escrito con lo siguiente:</li>
						<ul>
							<li>Datos recolectados</li>
							<li>Bitácora del sistema</li>
							<li>Gráfica que muestre la distribución de probabilidades de las llegadas al sistema comparada con la distribución Poisson con la tasa media de llegadas obtenida.</li>
							<li>Gráfica que muestre la distribución de probabilidades del tiempo medio entre llegadas al sistema comparada con la distribución exponencial.</li>
							<li>Gráfica que muestre la distribución de probabilidades del servicio (por servidor) comparada con la distribución Poisson con la tasa media de servicio obtenida.</li>
							<li>Gráfica que muestre la distribución de probabilidades del tiempo medio de servicio (por servidor) comparada con la distribución exponencial.</li>
							<li>La aproximación de la situación real del sistema de cola estudiado a uno de los modelos de colas Poisson vistos en clase.</li>
							<li>Las medidas de eficiencia: número esperado de clientes en el sistema, longitud esperada de la cola, tiempo esperado de espera en el sistema, tiempo esperado de espera en la cola, número estimado de servidores activos y porcentaje de utilización del servicio.</li>
							<li>Las recomendaciones por parte de su equipo, en función de los datos obtenidos.</li>
						</ul>
						<li>Presentación de su propuesta  como analistas de líneas de esperas para hacer la evaluación de las mismas y generar propuesta que mejoren el funcionamiento de las líneas de esperas.</li>
						<li>Programa de simulación de la línea de espera del comedor universitario en PHP</li>
						
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Objetivos</div>
					<div class="panel-body">
						Realizar un estudio de las líneas de espera del Comedor Universitario de la Universidad de Carabobo campus Bárbula durante una semana completa, con la finalidad de establecer la situación actual del comedor. Simular las posibles situaciones de líneas de esperas del comedor y proponer la(s) solución(es).
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">Consideraciones</div>
					<div class="panel-body">
						<ul>
							<li>Hacer el estudio de las líneas de espera a la hora del almuerzo</li>
							<li>La data debe ser recolectada antes del 14 de agosto 2015</li>
							<li>Se debe considerar dos colas atendidas por un servidor cada una</li>
							<li>Determinar los indicadores claves de la cola del comedor (número de servidores, tasa media de llegadas, tasa media de servicio, longitud de la cola, entre otros)</li>
							<li>Realizar una bitácora de eventos diaria del sistema, es decir, se debe recopilar la hora en que ocurre un evento y el tipo de evento (Llegada del cliente i, inicio del servicio del cliente i en el servidor j, salida del cliente i) que será entregada con el trabajo.</li>
							<li>Entrega, se harán dos entregas:</li>
								<ul>
									<li>Impresa: que viene dada por el informe  y código de la simulación del trabajo </li>
									<li>Digital (CD), la presentación, informe, código y simulador, todo debe correr desde el cd.</li>
								</ul>
						</ul>
					</div>
				</div>
			</div>

		</div>

	<?php include_once('footer.php'); ?>
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<style type="text/css"> #space{ padding-top: 20px; }</style>
</body>
</html>
