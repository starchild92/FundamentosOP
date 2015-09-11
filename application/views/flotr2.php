		<link rel="stylesheet" type="text/css" href="<?php echo base_url('js/lib/style.css');?>">
		<script type="text/javascript" src="<?php echo base_url('js/lib/prototype-1.6.0.2.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvas2image.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvastext.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/flotr.debug-0.2.0-alpha.js'); ?>"></script>

		<div id="wrapper">
			<div id="container2" style="width:auto;height:400px;"></div>
		</div>

		<script type="text/javascript">
			/** Wait till dom's finished loading **/
			document.observe('dom:loaded', function(){

				function ProbExpo(lambda, x){
					var e;
					var a;
					var b;
					var c;

					c = lambda*(-1);
					c = c * x;
					e = Math.exp(c);
					e = lambda * e;

					return e;
				}
				/** Fill series d1 and d2 **/
				var d2 = [];
				var d1 = [];
				var d0 = [];
			    for(var i = 0; i <= 5; i += 0.15){
			        d0.push([i, ProbExpo(0.5,i)]);
			        d1.push([i, ProbExpo(1,i)]);
			        d2.push([i, ProbExpo(1.5,i)]);
			    }
				/*** Draw the graph ***/
			    f = Flotr.draw($('container2'),[  
						{data:d0, label:'lambda: 0  y x:[0...5]', yaxis:1,  lines: {show: true}, points: {show: false}},
						{data:d1, label:'lambda: 1  y x:[0...5]', yaxis:1,  lines: {show: true}, points: {show: false}},
						{data:d2, label:'lambda: 1.5  y x:[0...5]', yaxis:1,  lines: {show: true}, points: {show: false}}
					],{
						xaxis:{
							noTicks: 5,
							tickFormatter: function(n){ return n; }, // => displays tick values between brackets.
							min: 0,	 // => part of the series is not displayed.
							max: null,	// => part of the series is not displayed.
							labelsAngle: 45,
							title: 'x'
						},
						yaxis:{
							noTicks: 5,
							max: 1.7,
							title: 'P(x)'
						},
						HtmlText: false,
						legend: {
							position: 'ne'
						}
				});
			});
		</script>