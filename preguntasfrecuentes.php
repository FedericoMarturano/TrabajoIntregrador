<?php
require_once("funciones.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
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
               <?php if(!estaLogueado()){
                 echo '<a class="nav-link" href="registracion.php">Registrar</a>'; } ?>
               <?php if(estaLogueado()){
                 echo '<a class="nav-link" href="miPerfil.php">Mi Perfil</a>'; } ?>
             </li>
             <li class="nav-item active">
               <?php if(!estaLogueado()){
                 echo '<a class="nav-link" href="login.php">Ingresar</a>'; } ?>
               <?php if(estaLogueado()){
                 echo '<a class="nav-link" href="logout.php">Cerrar Sesión</a>'; } ?>
             </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit" style="color:#C900C6">Buscar</button>
            </form>
          </div>

        </nav>

    </header>

    <div class="col-group text-center mb-xs-8 preguntasfrecuentes">
                    <h1 style="color:#C900C6"style="color:#C900C6">
                    Preguntas frecuentes
                    </h1>
                    <p class="faq2"style="color:#00ccff">
                    Estas son algunas preguntas habituales sobre cómo vender en MirArte
                    </p>
                </div>

    <div class="container">
                <div class="row">
                  <div class="col">
                    <h2 style="color:#C900C6">¿Quién hace MirArte?</h2>
                      <p class="faq" style="color:#00ccff">Mucha gente con talento. Entre ellos, nuestro equipo directivo y nuestros empleados de todo el mundo. Juntos, servimos a una comunidad de millones de negocios creativos y a sus clientes.</p>
                  </div>
                  <div class="col">
                    <h2 style="color:#C900C6">¿Por qué me conviene crear una tienda?</h2>
                      <p class="faq" style="color:#00ccff">Abrir una tienda en MirArte es sencillo. Créate una cuenta de MirArte (si aún no la tienes), establece la ubicación de tu tienda, elige un nombre para la tienda, crea un anuncio, establece una forma de pago, y para terminar, selecciona una forma de facturación.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                        <h2 style="color:#C900C6">¿Cómo gana dinero MirArte?</h2>
                          <p class="faq" style="color:#00ccff">Nuestro modelo de negocio se basa en compartir el éxito: MirArte gana dinero cuando lo hacen sus vendedores. Los ingresos de nuestro servicio de mercado incluyen una tarifa de 20 ARS por publicar cada anuncio y una comisión del 3,5 % sobre cada venta completada en nuestro sitio web.</p>
                  </div>
                  <div class="col">
                    <h2 style="color:#C900C6">¿Qué puedo vender en MirArte?</h2>
                      <p class="faq" style="color:#00ccff">MirArte proporciona un mercado para que artesanos, artistas y coleccionistas vendan sus propias creaciones hechas a mano, productos vintage y materiales para artesanía hechos a mano o no.</p>
                  </div>
                  <div class="col">
                        <h2 style="color:#C900C6">¿Cómo protege MirArte a los vendedores?</h2>
                          <p class="faq" style="color:#00ccff">La protección al vendedor es un programa que garantiza tu tranquilidad cuando surgen diferencias sobre una transacción. Si no puedes resolver un desacuerdo con un comprador y la transacción cumple las condiciones correspondientes, MirArte te ayudará a resolver el problema mediante su sistema de resolución de disputas. </p>
                  </div>
                </div>
            </div>

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
