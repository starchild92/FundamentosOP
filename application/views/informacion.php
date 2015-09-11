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
              <h2 class="masthead-brand" style="color: rgb(0, 147, 221); text-shadow: none;"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>  Queues</h2>
              <nav>
                <ul class="nav masthead-nav">
                  <li ><a href="<?php echo base_url('inicio');?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Bienvenido</a></li>
                  <li class="active"><a href="#"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  Información</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h2 class="cover-heading">Elaborado por:</h2>
            <br>
            <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="<?php echo base_url('images/luis.jpg'); ?>" alt="rude" width="140" height="140">
          <h4>Luis Pérez</h4>
        </div><!-- /.col-lg-4 col-sm-4 col-xs-12 -->
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="<?php echo base_url('images/ivo.jpg'); ?>" alt="rude" width="140" height="140">
          <h4>Ivonne Ortega</h4>
        </div><!-- /.col-lg-4 col-sm-4 col-xs-12 -->
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="<?php echo base_url('images/oli.jpeg'); ?>" alt="rude" width="140" height="140">
          <h4>Olinda López</h4>
        </div><!-- /.col-lg-4 col-sm-4 col-xs-12 -->
        <p>para la materia Fundamentos de Optimización Computacional</p>
        <p class="lead">  
          <a href="<?php echo base_url('enunciado'); ?>" class="btn btn-lg btn-default">Ir al Enunciado</a>
        </p>
      </div><!-- /.row -->
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>Fundamentos de Optimización Computacional<br>Agosto/Septiembre de 2015.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/cover.css');?>">
    <style type="text/css">
      body {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
        background-image: url("<?php echo base_url('images/cover_fondo1.png');?>");
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }
    </style>
</body>
</html>