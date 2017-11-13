<?php
require_once("soporte.php");

?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/style.css">
    <link href="img/A.ico" type="image/x-icon" rel="short cut icon"/>
    <title>mirArte</title>
  </head>

  <body>

    <header>
      <nav color=yellow class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <a class="navbar-brand" href="index.php"><img class="titulo" src="img/mirarte3.png"></img></a>
    		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      	    <span class="navbar-toggler-icon"></span>
    		 </button>

    		 <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <?php if($auth->estaLogueado()){
                 echo '<a class="nav-link" href="miPerfil.php">Mi Perfil</a>';}
                 else {
                 echo '<a class="nav-link" href="registracion.php">Registrar</a>'; } ?>
             </li>
             <li class="nav-item active">
               <?php if($auth->estaLogueado()){
                 echo '<a class="nav-link" href="logout.php">Cerrar Sesión</a>'; }
                 else {
                 echo '<a class="nav-link" href="login.php">Ingresar</a>'; } ?>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit" style="color:#C900C6">Buscar</button>
            </form>
          </div>

        </nav>

      </header>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/banner.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/banner3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
        <div class="row text-center">
          <div class="col-md-4">
            <h4 style="color:#00ccff">Articulos únicos</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <h4 style="color:#00ccff">Vendedores independientes</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <h4 style="color:#00ccff">Compras seguras</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>

      <section class="informacion">
        <div class="container">
          <h2 class="text-center">¿Qué es <img class="titulo2" src="img/mirarte2.png"></img>?</h2>
          <hr class="star-light" color="white">
          <div class="row">
            <div class="col-lg-4 ml-auto">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-lg-4 mr-auto">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-lg-8 mx-auto text-center">
              <a href="preguntasfrecuentes.php" class="btn btn-lg btn-outline">
                <h6 style="color:#C900C6"> Conocé mas </h6>
              </a>
            </div>
          </div>
        </div>
      </section>
        <article>
          <h4 class="titulo3" style="color:gray">Productos más populares...</h4>
          <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/imagend.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title"style="color:white">Card title</h4>
              <p class="card-text" style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn my-2 my-sm-0" style="color:#C900C6"><b>Comprar Ahora!</b></a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/imagenc.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title"style="color:white">Card title</h4>
              <p class="card-text" style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn my-2 my-sm-0" style="color:#C900C6"><b>Comprar Ahora!</b></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/imagenb.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title" style="color:white">Card title</h4>
              <p class="card-text" style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn my-2 my-sm-0" style="color:#C900C6"><b>Comprar Ahora!</b></a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="img/imagen a.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title" style="color:white">Card title</h4>
              <p class="card-text" style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn my-2 my-sm-0" style="color:#C900C6"><b>Comprar Ahora!</b></a>
            </div>
          </div>
        </div>


      </div>
        </article>


      <footer class="text-center p-3 mb-2 bg-secondary text-white">
        <div class="footer-above">
          <div class="container">
            <div class="row">
              <div class="footer-col col-md-4">
                <p><strong>Acerca de</strong></p>
                <ul class="list-inline">
                  <li class="list-block-item">
                    <p>MirArte</p>
                  </li>
                  <li class="list-block-item">
                    <p>Mapa del sitio</p>
                  </li>
                  <li class="list-block-item">
                    <p>Aviso legal</p>
                  </li>
                </ul>
              </div>
              <div class="footer-col col-md-4">
                <p><strong>Redes Sociales</strong></p>
                <ul class="list-inline">
                  <li class="list-block-item">
                    <p><a class="iconmirarte" href="#">
                      <img src="img/instagram.png" alt="">  Instagram</a></p>
                  </li>
                  <li class="list-block-item">
                    <p><a class="iconmirarte" href="#">
                      <img src="img/facebook.png" alt=""> Facebook</a></p>
                  </li>
                  <li class="list-block-item">
                    <p><a class="iconmirarte" href="#">
                    <img src="img/gorjeo.png" alt=""> Twitter</a></p>
                  </li>
                </ul>
              </div>
              <div class="footer-col col-md-4">
                <p><strong>Mi cuenta</strong></p>
                <ul class="list-inline">
                  <li class="list-block-item">
                    <p>Ingresar</p>
                  </li>
                  <li class="list-block-item">
                    <p>Vender</p>
                  </li>
                  <li class="list-block-item">
                    <p>Comprar</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


  </body>

</html>
