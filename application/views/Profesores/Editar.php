<!DOCTYPE html>
<html>
  <head>
    <title>
      Editar Profesor
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
      
      /* http://css-tricks.com/perfect-full-page-background-image/ */
      html {
        /* background: url(img/6133364748_89f2365922_o.jpg) no-repeat center center fixed;
        */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      
      body {
        padding-top: 20px;
        font-size: 16px;
        font-family: "Open Sans",serif;
        background: transparent;
      }
      
      h1 {
        font-family: "Abel", Arial, sans-serif;
        font-weight: 400;
        font-size: 40px;
      }
      
      /* Override B3 .panel adding a subtly transparent background */
      .panel {
        background-color: rgba(255, 255, 255, 0.9);
      }
      
      .margin-base-vertical {
        margin: 40px 0;
        text-align: center;
      }
      
    </style>
    
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
          
          <h1 class="margin-base-vertical">
            Editar Profesor
          </h1>
          
          <form class="form-horizontal" action="<?php echo base_url();?>profesores/EditarProfesores" method="Post">

            <fie1ldset>
              <input type="hidden" name='id' value="<?php echo $data->Cédula; ?>" >

              <!-- Address form -->
              
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Cédula
                </label>
                <div class="controls">
                  <input id="cedula" name="cedula" type="text" placeholder="Cédula" class="input-xlarge" value="<?php echo $data->Cédula; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Nombre completo
                </label>
                <div class="controls">
                  <input id="nombre_completo" name="nombre_completo" type="text" placeholder="Nombre completo"
                  class="input-xlarge" value="<?php echo $data->Nombre_Completo; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
              <!-- full-name input-->
              <div class="control-group">
                <label class="control-label">
                  Correo
                </label>
                <div class="controls">
                  <input id="correo" name="correo" type="text" placeholder="Correo"
                  class="input-xlarge" value="<?php echo $data->Correo; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
              <!-- address-line1 input-->
              <div class="control-group">
                <label class="control-label">
                  Contraseña
                </label>
                <div class="controls">
                  <input id="contrasena" name="contrasena" type="text" placeholder="Contraseña"
                  class="input-xlarge" value="<?php echo $data->Contraseña; ?>">
                  <p class="help-block">
                  </p>
                </div>
              </div>
                  </fieldset>
                  <br>
                  <p class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                      Guardar
                    </button>
                  </p>
              </form>
              
              
          </div>
          <!-- //main content -->
      </div>
      <!-- //row -->
    </div>
    
    <!-- //container -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>

    <script type="text/javascript">

      $(function() {

          $('#pais').val("<?php echo $data->Pais; ?>")
      });

      

    </script>
  </body>
</html>