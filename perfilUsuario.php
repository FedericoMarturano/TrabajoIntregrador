<?php
require_once("soporte.php");

if (!$auth->estaLogueado()) {
  header("Location:index.php");exit;
}

$usuario = $auth->obtenerUsuarioLogueado($db);

?>
    <div class="row">

    </div>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Perfil</title>

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
<br>
<br>
<br>
<br>
    <div>Perfil de <?=$usuario->getNombre()?></div>
    <ul>
        <li>Nombre: <?=$usuario->getNombre()?> </li>
        <li>Apellido: <?=$usuario->getApellido()?> </li>
        <li>Usuario: <?=$usuario->getUsername()?> </li>
        <li>Email: <?=$usuario->getEmail()?> </li>
    </ul>
<br>
<br>
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
