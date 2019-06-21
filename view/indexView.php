<?php
include_once "view/headerView.php";
?>
  <!--Inicia Menu-->
            <div class="collapse navbar-collapse " id="navegacion-stv">
               <ul class="nav navbar-nav">
                 <li  class="active"><a href="index.php">Home</a></li>
                 <li><a href="?route=sites">Touristic sites</a></li> 
              </ul>
              <ul class="nav navbar-nav" style="float:right;">
                 <li ><a href="?route=login" class="btn btn-primary btn-lg active" role="button" >Sign in</a></li>
              </ul>
            </div>
         </div>
      </nav>
  	</header>
      <div style="color: antiquewhite" class="container">
        <h2><b>Sobre nosotros</b></h2>
            <div class="info-square ">
              <p ><b>Asistidos por CANATUR:</b> La Cámara Nacional de Turismo de Costa Rica(CANATUR) fue fundada en 1974 como una organización sin fines de lucros, que reúne en su seno a la más alta jerarquí de las cámaras y asociaciones de la empresa turística privada del país, cuyos miembros representan a la industria turística nacional.</p>
            </div>
        <h2>Equipo desarrollador <b>Info-Tour</b></h2>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row info-square">
              <div class="col-md-4 ">
                <h2>Steven Camacho</h2>
                <p >Estudiante de la Universidad de Costa Rica, Ingeniero Informática, Director de proyectos, Administrador de Base de datos e Inteligencia de Negocios </p>
              </div>
              <div class="col-md-4 ">
                <h2>Ronald Segura</h2>
                <p>Estudiante de la Universidad de Costa Rica, Ingeniero Informática, Experto desarrollador QA, Desarrollador Senior, Administrador Base de Datos</p>
             </div>
              <div class="col-md-4 ">
                <h2>Daniel Solano</h2>
                <p>Estudiante de la Universidad de Costa Rica, Ingeniero Informática, Senior Arquitecto Software, Administrador de Base de datos, Gerente de marca, Senior Administrador Servidores Linux</p>
              </div>
            </div>
        </div>
            <img src="http://www.ombian.com.ar/NEUQUEN_2005/pehuenia_batea_panoramica.jpg" width="1140" class="img-fluid" alt="Responsive image">
            <hr>
      </div>

  <?php  include_once 'footerView.php'; ?>

