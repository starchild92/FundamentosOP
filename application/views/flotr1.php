		<link rel="stylesheet" type="text/css" href="<?php echo base_url('js/lib/style.css');?>">
		<script type="text/javascript" src="<?php echo base_url('js/lib/prototype-1.6.0.2.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvas2image.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/lib/canvastext.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/flotr.debug-0.2.0-alpha.js'); ?>"></script>

		<div id="wrapper">
			<div id="container1" style="width:auto;height:400px;"></div>
		</div>

		<script type="text/javascript">
			/** Wait till dom's finished loading **/
			document.observe('dom:loaded', function(){
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
				/** Fill series d1 and d2 **/
				var d2 = [];
				var d1 = [];
				var d0 = [];
			    for(var i = 0; i <= 20; i += 1){
			        d0.push([i, poissonG(1,i)]);
			        d1.push([i, poissonG(4,i)]);
			        d2.push([i, poissonG(10,i)]);
			    }
				/*** Draw the graph ***/
			    f = Flotr.draw($('container1'),[  
						{data:d0, label:'lambda: 1  y k:[0...20]', yaxis:1,  lines: {show: false}, points: {show: false}},
						{data:d1, label:'lambda: 4  y k:[0...20]', yaxis:1,  lines: {show: false}, points: {show: false}},
						{data:d2, label:'lambda: 10 y k:[0...20]', yaxis:1,  lines: {show: false}, points: {show: false}}
					],{
						xaxis:{
							noTicks: 20,
							tickFormatter: function(n){ return n; }, // => displays tick values between brackets.
							min: 0,	 // => part of the series is not displayed.
							max: null,	// => part of the series is not displayed.
							labelsAngle: 90,
							title: 'k'
						},
						yaxis:{
							noTicks: 20,
							max: 0.4,
							title: 'P(X=k)'
						},
						HtmlText: false,
						legend: {
							position: 'ne'
						}
				});
			    //This is the end of draw

			});
		</script>