</!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<title>Touristic sites</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no,initial-sclae=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  	<link rel="shorcut icon" type="image/x-icon" href="view/img/icono.ico" />
  	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/estilos.css"/>
  
    <script langiage="javascript" type="text/javascript">
      // RESALTAR LAS FILAS AL PASAR EL MOUSE
      function ResaltarFila(id_fila) {
          document.getElementById(id_fila).style.backgroundColor = '#000000';
      }
       
      // RESTABLECER EL FONDO DE LAS FILAS AL QUITAR EL FOCO
      function RestablecerFila(id_fila) {
          document.getElementById(id_fila).style.backgroundColor = '#2B6A5C';
      }
       
      // CONVERTIR LAS FILAS EN LINKS
      function CrearEnlace(url) {
          location.href=url;
      }
      </script>

  </head>
  <body>
  	<header>
        <section class="jumbotron hidden-xs">
            <div class="container">
                <h2>TOURISTIC SITE RECOMMENDATIONS</h2>
            </div>
        </section>
      <nav class="navbar navbar-inverse " role="navigation">
         <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-stv">
                    <span class="sr-only"> Show Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
                 <span class="navbar-brand">Info-Tour</span>
             </div>
             