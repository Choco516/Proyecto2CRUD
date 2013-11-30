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
  background: url(http://www.freefever.com/stock/futuristic-city-fondos-colores-del-arcoiris-widescreen-hd-y.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.panel-default {
opacity: 0.7;
margin-top:110px;
}
.form-group.last { margin-bottom:0px; }

#centrado{
  margin-left: 35%;
  width:300px;
}
    </style>
    
  </head>
  <body>
    
   <div class="container">
    <div class="row">
        <div id= "centrado" class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div  class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Ingresar</div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url();?>login/Autenticar" method="Post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" >
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Clave"  id="clave" name="clave" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Recuerdame
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">

                            <button type="submit" class="btn btn-success btn-sm">
                                Entrar</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                limpiar</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    No Registrado? <a href="http://www.jquery2dotnet.com">Registrate aquí</a></div>
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