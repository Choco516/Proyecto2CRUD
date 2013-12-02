<!DOCTYPE html>
<html>
  <head>
    <title>
      Aulas
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
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    
<style>
  body { 
    background: url(http://nocturnar.com/forum/attachments/escritorio/43905d1344378770-fondo-aurora-ultimate-1600x1200.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  .panel-default {
    opacity: 0.5;
    margin-top:0px;
  }

  #centrado{
    margin-left: 25%;
    width:500px;
  }

  #centrado2{
    margin-left: 29%;
  }
  #centrado3{
    margin-left: 25%;
  }
  #centrado4{
    margin-left: 227%;
  }
  #centrado5{
    margin-left: 185%;
  }
  #atras{
  margin-top: 5%;
  margin-left: 4%;
  width:110px;
  opacity: 0.7;
}
      
    </style>
    
  </head>
  <body>
    <div id="atras"class="col-lg-4">
                            <p><a href="http://localhost/proyecto2CRUD/index.php/Principal" class="btn btn-outlined btn-block btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Atrás</h3></a></p>
    </div> 
    <div class="container">
      
      
      <?php

   
        foreach ($data as $row) {            
  
          echo '<br><br>';
          echo '<div class="panel panel-default" id= "centrado" class="container-fluid well span6">';
          echo '<div class="row-fluid">';
          echo '<div id= "centrado2" class="span2" >';
          echo '<img src="http://www.golden5.org/golden5/golden5/iconos/aula.jpg" class="img-circle">';
          echo '</div>';
          echo '<div id= "centrado3" class="span8">';
          echo '<h3>Nombre: ' . $row['Nombre']. '</h3>' ;
          echo '<h6>Codigo: ' . $row['Codigo'] . '</h6>';
          echo '<h6>Ubicación: ' . $row['Ubicación'] . '</h6>';
          echo '</div>';
          echo '<div class="span2">';
          echo '<div class="btn-group">';
          echo '<a id= "centrado4"class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">';
          echo 'Action ';
          echo '<span class="icon-cog icon-white"></span><span class="caret"></span>';
          echo '</a>';
          echo '<ul id= "centrado5" class="dropdown-menu">';
          echo '<li><a href="#"><span class="icon-wrench"></span> Modificar</a></li>';
          echo '<li><a href="#"><span class="icon-trash"></span> Eliminar</a></li>';
          echo '</ul>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';


        }
      ?>

      <!-- //row -->
    </div>
    
    <!-- //container -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>