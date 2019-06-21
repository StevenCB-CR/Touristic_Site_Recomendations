<?php
include_once "view/headerView.php";
?>

             <!--Inicia Menu-->
             <div class="collapse navbar-collapse" id="navegacion-stv">
               <ul class="nav navbar-nav">
                 <li><a href="index.php">Home</a></li>
                 <li  class="active"><a href="?route=sites">Touristic sites</a></li> 
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
          <div >
            <div style="background-color:ghostwhite; ">
                <h4 style="margin: 3px">Para saber que categoría de destino te recomendamos, marca las opciones que se ajustan a la busqueda de tu paseo:</h4>
                <form action="#" method="post" style="margin-bottom:1em; padding: 1em;">
                    <label class="checkbox-inline"><input type="checkbox" value="">¿Con niños?</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">¿Aventurero?</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">¿Con adulto mayor?</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">¿Influencer?</label>
                    <button type="submit" class="btn btn-primary">Recomendar</button>
                </form>
            </div>
            <!-- Search form -->
            <input class="form-control" type="text" placeholder="Buscar por descripción" aria-label="Search"> 

            <table  class="table table-condensed" style="color: antiquewhite">
              <thead>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Ubicación</th>
                <th>Precio</th>
              </thead>
              <tbody>
                  <tr id="fila_1" onMouseOver="ResaltarFila('fila_1');" onMouseOut="RestablecerFila('fila_1')" onClick="CrearEnlace('?route=place');">
                    <td>Rancho monte alegre</td>
                    <td>Vive la fiesta respirando aire fresco, en medio de la naturaleza</td>
                    <td>Relax</td>
                    <td>Turrialba</td>
                    <td>$200</td>
                  </tr>
                  <tr id="fila_2" onMouseOver="ResaltarFila('fila_2');" onMouseOut="RestablecerFila('fila_2')" onClick="CrearEnlace('?route=place');">
                    <td>Finca oro</td>
                    <td>Estación biológica, avistamiento de aves, caminatas nocturnas</td>
                    <td>Naturalista</td>
                    <td>Orosi</td>
                    <td>$250</td>
                  </tr>
                  <tr id="fila_3" onMouseOver="ResaltarFila('fila_3');" onMouseOut="RestablecerFila('fila_3')" onClick="CrearEnlace('?route=place');">
                    <td>Catarata y sendero la cruz</td>
                    <td>Senderismo de alto nivel, con expertos guías turisticos</td>
                    <td>Atlético</td>
                    <td>Paraíso</td>
                    <td>$179</td>
                  </tr>
              </tbody>
            </table>
          </div>
      </section>
    </div>

    <?php  include_once 'footerView.php'; ?>