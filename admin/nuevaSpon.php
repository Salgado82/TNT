<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administracion TNT</title>

    <!-- Bootstrap CSS -->
    <link href="../utilidades/boot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Css -->
    <link href="../css/styleAdmin.css" rel="stylesheet">

  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administración TNT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Lista</a></li>
                <li><a href="nuevaNew.php">Añadir</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sponsors <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Lista</a></li>
                <li class="active"><a href="nuevaSpon.php">Añadir</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <div class="row">
        
        <div class="col-lg-8 col-lg-offset-2"> 
          <div class="page-header">
            <h1>Nuevo Sponsor</h1>
          </div>

          <form role="form" action="insertarSpon.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ejemplo_email_1">Nombre del sponsor</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe el nombre del sponsor">
            </div>
            <div class="form-group">
              <label for="ejemplo_archivo_1">Seleccionar imagen</label>
              <input id="imagen" name="imagen" type="file" class="form-control">
              <p class="help-block">Recuerda que la imagen debe ser maximo de 550x350.</p>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
  
        </div>  

      </div>

    </div> <!-- /container -->

    <!-- jQuery -->
    <script src="../utilidades/jquery/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="../utilidades/boot/js/bootstrap.min.js"></script>

  </body>
</html>
