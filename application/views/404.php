<!DOCTYPE html>
<html lang="es">
<head>
	 <meta charset="UTF-8">
	<title>Proyecto de F.O.C</title>
</head>
<body>
	<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand" style="color: rgb(0, 147, 221); text-shadow: none;"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>  Queues</h1>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">¡404!</h1>
            <p class="lead">Parece que la página que ha solicitado no existe y si ve un unicornio presione "Ir al Inicio".</p>
            <img src="<?php echo base_url('images/404rainbow.png'); ?>">
            <p class="lead">
              <a href="<?php echo base_url('inicio'); ?>" class="btn btn-lg btn-primary">Ir al inicio</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Elaborador por <a href="http://twitter.com/lapv20">@LuisPérez</a> en Agosto-Septiembre de 2015.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/cover.css');?>">
    <style type="text/css">
      body {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
        background-image: url("<?php echo base_url('images/cover_fondo1.png'); ?>");
        background-repeat: no-repeat;
        background-size: 100% 135%;
      }
    </style>
</body>
</html>