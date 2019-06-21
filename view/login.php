</!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="utf-8" />
  	<title>SISTEMA</title>
  	<meta name="description" content="Sitio oficial" />
  	<meta name="viewport" content="width=device-width, user-scalable=no,initial-sclae=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  	<link rel="shorcut icon" type="image/x-icon" href="view/img/icono.ico" />
  	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="view/css/estilos.css"/>

  </head>
  <body>
    <section class="jumbotron">
        <div class="container">
            <h2>TOURISTIC SITE RECOMENDATIONS </h2>
            <p>Paradise travels</p>
        </div>
    </section>

    <section class="main container">
        <div class="container">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                  <div class="panel panel-info" ><!-- panel-info para borde celeste del Div-->
                          <div class="panel-heading"><!--div encabezado-->
                              <div class="panel-title">Sign In</div>
                              <div class="bg-warning text-center"><?php if(isset($_POST['error'])){ echo $_POST['error'];}?></div>
                          </div>
                          <div  style="padding-top:30px" class="panel-body" >
                              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                              <form action="?login" method="post" id="loginform" class="form-horizontal" role="form">
                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                                  </div>
                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                  </div>
                                  <div style="margin-top:10px" class="form-group">
                                      <!-- Button -->
                                      <div class="col-sm-12 controls">
                                        <input type="submit" name="btn-login" id="btn-login" class="btn btn-success" value="Login">
                                        <!-- <a id="btn-visitante" href="?login=visitante" class="btn btn-info">Ingresar como visitante</a>
                                        -->
                                      </div>
                                  </div>
                              </form>
                          </div>
                  </div>
            </div>
        </div>
    </section>

    <script src="view/js/jquery.js"></script>
    <script src="view/js/bootstrap.min.js" ></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  </body>
</html>
