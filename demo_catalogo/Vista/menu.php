<div class="row">
  <div class="navbar navbar-default col-xs-12" role="navigation">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main" name="Menu Principal">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-main">
      <div class="row">
        <div class="visible-xs">
          <ul class="nav navbar-default">
            <li class="centrar"><a href="index.php">Inicio</a></li>
            <li class="centrar"><a href="nosotros.php">Nosotros</a></li>
            <li class="centrar"><a href="productos.php">Productos</a></li>
            <li class="centrar"><a href="noticias.php">Noticias</a></li>
            <hr>
            <li class="centrar">
              <form action="busqueda.php" method="POST" class="formulario" >
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="centrar col-xs-6">
                      <input type="text" name="nombre" placeholder="Buscar" class="form-control"/>
                    </div>
                    <div class="centrar col-xs-12">
                    <br>
                    <input class="btn btn-default" type="submit" value="Buscar"/>
                    </div>
                  </div>
                </div>
              </form>
            </li>
          </ul>  
        </div>
        <div class="hidden-xs">
          <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav nav-pills nav-justified">
              <li><a href="index.php">Inicio</a></li>
              <li ><a href="nosotros.php">Nosotros</a></li>
              <li><a href="productos.php">Productos</a></li>
              <li><a href="noticias.php">Noticias</a></li>
              <li class="centrar">
                <form action="busqueda.php" method="POST" class="navbar-form " >
                  <input type="text" name="nombre" placeholder="Buscar" class="form-control"/>
                  <input class="btn btn-default" type="submit" value="Buscar"/>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>