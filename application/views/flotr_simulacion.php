		<link rel="stylesheet" type="text/css" href="<?php echo base_url('js/lib/style.css');?>">
		<script type="text/javascript" src="<?php echo base_url('js/lib/prototype-1.6.0.2.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvas2image.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvastext.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/flotr.debug-0.2.0-alpha.js'); ?>"></script>

		<div id="wrapper">
			<div id="container1" style="width:auto;height:400px;"></div>
		</div>

		<script type="text/javascript">
			function factorial(number){
				if(number < 2){
					return 1;
				}else{
					return (number * factorial(number-1));
				}
			}

			function poissonG(lambda, k){
				var e;
				var a;
				var b;
				var c;

				e = Math.exp(1);
				a = Math.pow(e, (-1 * lambda));
				b = Math.pow(lambda,k);
				c = factorial(k);

				return a * b / c;
			}

			function probabilidad(omega, t, phi){
				e = Math.exp(1);
				a = omega * t;
				b = Math.pow(a, phi);
				c = Math.pow(e, (-1 * a));
				d = b * c;
				f = factorial(phi);

				return d / f;
			}
			
			function graficar(){
				var d0 = [];
				var d1 = [];

				var omega = document.getElementById("lambda").value;
				var phi = document.getElementById("k").value;
				var tee = document.getElementById("t").value;

				if (phi >= 0 && omega >= 0) {
					document.getElementById('cambio').innerHTML = "Cambie los valores de <span class='label label-info'>Lambda λ</span> o <span class='label label-info'>k</span> para modificar la curva.";
					document.getElementById('k').style.border = "1px solid #ddd";
					document.getElementById('lambda').style.border = "1px solid #ddd";
					for(var i = 0; i <= phi; i += 1){
				        d0.push([i, poissonG(omega,i)]);
				        d1.push([i, probabilidad(omega, tee, i)]);
				    }
					// Draw the graph
				    f = Flotr.draw($('container1'),
				    	[  
							{data:d0, label:' Dist. de Poisson'/*'lambda: '+omega+'  y k:[0...'+phi+']'*/, yaxis:1,  lines: {show: true}, points: {show: false}},
							{data: d1, label:' Dist. de Llegadas', lines: {show: true}, points: {show: false}}
						],{
							xaxis:{
								noTicks: phi,
								tickFormatter: function(n){ return n; }, // => displays tick values between brackets.
								min: 0,	 	// => part of the series is not displayed.
								max: null,	// => part of the series is not displayed.
								labelsAngle: 45,
								//title: 'k'
							},
							yaxis:{
								noTicks: 10,
								max: null
								//title: 'P(X=k)'
							},
							HtmlText: true,
							legend: {
								position: 'ne'
							}
					});
				    //This is the end of draw
				}else{
					document.getElementById('cambio').innerHTML = "No se admiten valores negativos para la Distribución";
					if (phi < 0) { document.getElementById('k').style.border = "1px solid #f00"; };
					if (omega < 0 ){ document.getElementById('lambda').style.border = "1px solid #f00"; };
				}
			};

			document.observe('dom:loaded', function(){ 
				graficar();
			});
		</script>