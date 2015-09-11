	<style type="text/css">
		h5{ text-align: center; }
		#london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }
		#lado{ border-left: 1px solid #eeeeee; }
	</style>

<div class="container">
	<div id="london"></div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-12">
			<center>
				<div class="col-md-6 col-xs-6">
					<img src="<?php echo base_url('images/LOGO UC.png'); ?>" alt="rude" width="70" height="85">
					<h5>Universidad de Carabobo</h5>
				</div><!-- /.col-md-4 -->
				<div class="col-md-6 col-xs-6">
					<img src="<?php echo base_url('images/LOGO FACYT.png'); ?>" alt="rude" width="80" height="85">
					<h5>Facultad Experimental de Ciencias y Tecnología</h5>
				</div><!-- /.col-md-4 -->
			</center>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12" id="lado">
			<center>
				<div class="col-md-12">
					<img class="img-circle" src="<?php echo base_url('images/esfera.png'); ?>" alt="rude" width="90" height="90">
				</div><!-- /.col-md-4 --><br>Fundamentos de Optimización Computacional<br>Prof. Yenin Rodriguez<br>
			</center>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12" id="lado">
			<center>
				<div class="col-md-4 col-xs-4">
					<img data-toggle="tooltip" title="Break a leg!" class="img-circle" src="<?php echo base_url('images/luis.jpg'); ?>" alt="rude" width="85" height="85">
					<h5>Luis Pérez</h5>
				</div><!-- /.col-md-4 col-xs-4 -->
				<div class="col-md-4 col-xs-4">
					<img data-toggle="tooltip" title="Some people want to set the world on fire." class="img-circle" src="<?php echo base_url('images/ivo.jpg'); ?>" alt="rude" width="85" height="85">
					<h5>Ivonne Ortega</h5>
				</div><!-- /.col-md-4 col-xs-4 -->
				<div class="col-md-4 col-xs-4">
					<img data-toggle="tooltip" title="There is not enough chocolat in the world!" class="img-circle" src="<?php echo base_url('images/oli.jpeg'); ?>" alt="rude" width="85" height="85">
					<h5>Olinda López</h5>
				</div><!-- /.col-md-4 -->
			</center>
		</div>
	</div>
</div>
	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	</script>