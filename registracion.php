<?php

require_once("soporte.php");

$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;

$arrayDeErrores = [];
if($_POST)
{

    $arrayDeErrores = $validator->validarInformacion($db);

    if(count($arrayDeErrores) == 0) {

      $usuario = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["username"], $_POST["email"], $_POST["contrasenia"]);
      $db->guardarUsuario($usuario);

      $archivo = $_FILES["avatar"]["tmp_name"];
      $nombreDelArchivo = $_FILES["avatar"]["name"];
      $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

      $nombre = dirname(__FILE__) . "/img/" . $_POST["username"] . ".$extension";

      move_uploaded_file($archivo, $nombre);

      header("Location:perfilUsuario.php");exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrar</title>
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
		<div class="container" id="registracion">
			<div class="row main">
				<div class="main-login main-center">
				<h5 style="color:#C900C6">Registrarse en MirArte</h5>
        <?php if (count($arrayDeErrores) > 0) : ?>
          <ul style="color:#00ccff;">
              <?php foreach($arrayDeErrores as $error) : ?>
                <li style="margin-left:20px;">
                  <?=$error?>
                </li>
              <?php endforeach; ?>
          </ul>
        <?php endif;?>
          <form role="form" action="registracion.php" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>" placeholder="Escriba su Nombre"/>
								</div>
							</div>
						</div>

            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Apellido</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $apellido; ?>" placeholder="Escriba su Apellido"/>
                </div>
              </div>
            </div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Escriba su Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Nombre de Usuario</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" placeholder="Escriba su Nombre de Usuario"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="contrasenia" id="contrasenia"  placeholder="Escriba su Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirmar Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="contrasena_confirm" id="contrasena-confirm"  placeholder="Confirmar Password"/>
								</div>
							</div>
						</div>

            <div class="form-group">
              <label>Foto de Perfil</label>
              <div>
                  <input type="file" name="avatar"/>
              </div>
            </div>

						<div class="form-group ">
							<input style="margin-bottom:50px;" type="submit" name="btn_submit" class="btn btn-primary btn-lg btn-block login-button" value="Registrarme"/>
						</div>

					</form>
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
