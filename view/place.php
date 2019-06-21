<?php
include_once "view/headerView.php";
?>
             <!--Inicia Menu-->
             <div class="collapse navbar-collapse" id="navegacion-stv">
               <ul class="nav navbar-nav">
                 <li><a href="index.php">Home</a></li>
                 <li><a href="?route=sites">Touristic sites</a></li> 
               </ul>
               <ul class="nav navbar-nav" style="float:right;">
                 <li ><a href="?route=login" class="btn btn-primary btn-lg active" role="button" >Sign in</a></li>
              </ul>
             </div>
         </div>
      </nav>
  	</header>
    <div class="container col-md-12">
      <aside class="col-md-3 hidden-xs">
        <h4 style="color:antiquewhite">Recomendaciones</h4>
        <div class="list-group">
          <a href="?route=place" class="list-group-item">
            <h4 class="list-group-item-heading">Nombre de Destino</h4>
            <li class="list-group-item" ><span class="pull-left "><img src="https://cdn.colombia.com/sdi/2019/02/22/quindio-en-busca-de-ser-el-mejor-destino-ecoturistico-del-pais-712902.jpg"  class="img-thumbnail img-rounded"></span>Disfruta de los parajes urbanos</li>
          </a>
          <a href="?route=place" class="list-group-item">
              <h4 class="list-group-item-heading">Nombre de Destino</h4>
              <li class="list-group-item" ><span class="pull-left "><img src="https://d36tnp772eyphs.cloudfront.net/blogs/2/2017/03/Zarcero.jpg"  class="img-thumbnail img-rounded"></span>Disfruta de los parajes urbanos</li>
          </a>
          <a href="?route=place" class="list-group-item">
                <h4 class="list-group-item-heading">Nombre de Destino</h4>
                <li class="list-group-item" ><span class="pull-left "><img src="https://imagenescityexpress.scdn6.secure.raxcdn.com/sites/default/files/2017-05/rincones-costa-rica.jpg"  class="img-thumbnail img-rounded"></span>Disfruta de los parajes urbanos</li>
          </a>
        </div>
      </aside>

      <section class="col-md-9 ">
          <div style="color: antiquewhite" >
                <h1 align="center" >Finca Oro Hotel Paradise</h1>
                <h1 align="center"><img src = "https://imagenescityexpress.scdn6.secure.raxcdn.com/sites/default/files/2017-05/rincones-costa-rica.jpg" align = "center" width="700" class="img-fluid img-thumbnail" alt="Catarata"</h1>
                </br>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quaerat optio accusantium facilis iste fugit, mollitia nihil voluptatibus vel quisquam voluptate eligendi necessitatibus quia inventore odio libero nemo. Autem, id.</h4>
                <br>
                <h4><b>Precio de $175 incluye:</b></h2>
                <h4>Hospedaje, desayuno, guía turistico, canopy, otros</h3>
                <br>
                <h4>Ubicado en: Orosi</h3>
            </div>
      </section>
    </div>

    <?php  include_once 'footerView.php'; ?>