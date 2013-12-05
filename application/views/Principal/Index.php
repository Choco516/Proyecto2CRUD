<!DOCTYPE html>
<html>
  <head>
    <title>
      Aula
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
    </script>
    <![endif]-->
    
    <style>
      
        body { 
          background: url(http://www.wallsave.com/wallpapers/2560x1600/fondos-de-color/1237569/fondos-de-color-fondo-pantalla-muralla-colores-hd-hq-p-1237569.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          padding-top:60px; 
        }
        .panel-body .btn:not(.btn-block) { 
          width:120px;margin-bottom:10px; 
        }

        .panel-default {
          opacity: 0.8;
          margin-top:0px;
        }

        #centrado{
          margin-left: 23%;
          width:575px;
        }

        #atras{
          margin-top: 0px;
          margin-left: 85%;
          width:150px;
          opacity: 0.7;
        }

    </style>
    
  </head>
  <body>
    <div id="atras"class="col-lg-4">
                            <p><a href="<?php echo base_url();?>login" class="btn btn-outlined btn-block btn-primary"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</h3></a></p>
    </div>                        
<div class="container">
    <div class="row">
        <div id= "centrado" class="panel panel-default" class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-align-justify"></span> Proyecto aula</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Administrativos" class="btn btn-outlined btn-block btn-danger"><span class="glyphicon glyphicon-briefcase"></span> Administrativos</h3></a></p>
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Profesores" class="btn btn-outlined btn-block btn-success"><span class="glyphicon glyphicon-user"></span> Profesores</h3></a></p>
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Estudiantes" class="btn btn-outlined btn-block btn-info"><span class="glyphicon glyphicon-tower"></span> Estudiantes</h3></a></p>    
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Aulas" class="btn btn-outlined btn-block btn-warning"><span class="glyphicon glyphicon-bell"></span> Aulas</h3></a></p>
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Cursos" class="btn btn-outlined btn-block btn-primary"><span class="glyphicon glyphicon-book"></span> Cursos</h3></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>