	<style type="text/css">
		h5{ text-align: center; }
		#london{ border-top: 1px solid #eeeeee; margin-bottom: 15px; }
		#lado{ border-left: 1px solid #eeeeee; }
		/* Sticky footer styles
		-------------------------------------------------- */
		html {
		  position: relative;
		  min-height: 100%;
		}
		.footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  height: 155px;
		}
		.no{
			text-decoration: line-through;
		}
		.gray {
		  filter: gray; /* IE6-9 */
		  filter: grayscale(1); /* Firefox 35+ */
		  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
		}
	</style>


	<footer class="footer">
		<div id="london"></div>

				<div class="col-lg-3 col-md-3 col-xs-12">
					<center>
						<img src="<?php echo base_url('images/LOGO UC.png'); ?>" alt="rude" width="60" height="75">
						<h5>Universidad de Carabobo</h5>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-12">
					<center>
						<img src="<?php echo base_url('images/LOGO FACYT.png'); ?>" alt="rude" width="70" height="75">
						<h5>Facultad Experimental de Ciencias y Tecnología</h5>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="lado">
					<center>
						<img class="img-circle" src="<?php echo base_url('images/esfera.png'); ?>" alt="rude" width="80" height="80"><br>Fundamentos de Optimización Computacional<br>Prof. Yenin Rodriguez<br>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="lado">
					<center>
						<img data-toggle="tooltip" title="Break a leg!" class="img-circle" src="<?php echo base_url('images/luis.jpg'); ?>" alt="rude" width="75" height="75">
						<h5>Luis Pérez</h5>
						<!--/.col-md-4 col-xs-4 -->
						<!--<div class="col-md-4 col-xs-4">
							<img data-toggle="tooltip" title="Some people want to set the world on fire." class="img-circle gray" src="<?php echo base_url('images/ivo.jpg'); ?>" alt="rude" width="85" height="85">
							<h5 class="no">Ivonne Ortega</h5>
						</div> /.col-md-4 col-xs-4 -->
						<!--<div class="col-md-4 col-xs-4">
							<img data-toggle="tooltip" title="There is not enough chocolat in the world!" class="img-circle gray" src="<?php echo base_url('images/oli.jpeg'); ?>" alt="rude" width="85" height="85">
							<h5 class="no">Olinda López</h5>
						</div> /.col-md-4 -->
					</center>
				</div>

	</footer>

	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
	</script>