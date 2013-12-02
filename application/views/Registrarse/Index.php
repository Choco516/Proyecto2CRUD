<!DOCTYPE html>
<html>
  <head>
    <title>
      Registro
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
            background: url(http://3.bp.blogspot.com/-YlcvHvdkAPY/UWrKX3i0fAI/AAAAAAAAA-8/Vi7bjWsmBwQ/s1600/Ondas+de+colores+brillantes+muy+lindos.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-top:30px; }

            .form {
opacity: 0.8;
margin-top:30px;
margin-left: 27%;
  width:300px;
}

#centrado{
  
}

.form-control { 
    opacity: 0.8;
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left: 5px;
    margin-right: 5px;
     }
     #atras{
        opacity: 0.7;
  margin-top: 1%;
  margin-left: 4%;
  width:110px;
}


    </style>
    
  </head>
  <body>
    <div id="atras"class="col-lg-4">
                            <p><a href="http://localhost/proyecto2CRUD/index.php/login" class="btn btn-outlined btn-block btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Atrás</h3></a></p>
    </div> 
<div class="container">
    <div class="row">

        <div  class="form" class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend><a href="http://localhost/proyecto2CRUD/index.php/Registrarse"><i class="glyphicon glyphicon-globe"></i></a> <a href="http://localhost/proyecto2CRUD/index.php/Registrarse">Registrarse!</a></legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="Cedula" placeholder="Cédula" type="text"
                        required autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                    <input class="form-control" name="nombre_completo" placeholder="Nombre" type="text"
                         />
                </div>
            </div>
            <input class="form-control" name="correo" placeholder="Correo" type="email" />
            <input class="form-control" name="contraseña" placeholder="Contraseña" type="password" />
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <select  class="form-control">
                        <option value="Credencial">-Credencial-</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Estudiante">Estudiante</option>
                    </select>
                </div>
            </div>
            
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                Registrarse</button>
            </form>
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