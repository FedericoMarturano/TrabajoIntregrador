<?php
session_start();

if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
  loguear($_COOKIE["usuarioLogueado"]);
}

function validarLogin() {
  $arrayDeErrores= [];
  if($_POST["username"] == "") {
    $arrayDeErrores["username"] = "Te equivocaste en el email";
  }
  else if (traerUsuario($_POST["username"]) == NULL) {
    $arrayDeErrores["username"] = "El usuario no ha sido encontrado";
  }
  else {
    if (strlen($_POST["contrasena"]) < 8) {
      $arrayDeErrores["contrasena"] = "Contraseña menor a 8 caracteres";
    }
    else {
      $usuario = traerUsuario($_POST["username"]);

      if (password_verify($_POST["contrasena"],$usuario["contrasenia"]) == false) {
        $arrayDeErrores[] = "La contraseña no coincide";
      }
    }
  }
  return $arrayDeErrores;
}

function validarInformacion() {
  $arrayDeErrores = [];

  $nombreDelArchivo = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

  if($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
    $arrayDeErrores["avatar"] = "Hubo un error al subir el archivo";
  }
  else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
    $arrayDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
  }

  if($_POST["nombre"] == "") {
    $arrayDeErrores["nombre"] = "Por favor ingresar un nombre";
  }

  if($_POST["email"] == "") {
    $arrayDeErrores["email"] = "Por favor ingresar un email";
  }
  else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "Ingresar un formato válido de email";
  }
  else if (traerPorEmail($_POST["email"]) != NULL) {
    $arrayDeErrores["email"] = "Mail ya ingresado, por favor ingresar uno nuevo";
  }
  else if (traerUsuario($_POST["username"]) != NULL) {
    $arrayDeErrores["username"] = "El usuario ya existe";
  }

  if (strlen($_POST["contrasena"]) < 8) {
    $arrayDeErrores["contrasena"] = "Tu contraseña debe tener al menos 8 caracteres";
  }
  else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
    $arrayDeErrores["contrasena"] = "Tu contraseña debe tener al menos 1 mayuscula";
  }
  else if ($_POST["contrasena"] != $_POST["contrasena_confirm"])
  {
    $arrayDeErrores["contrasena"] = "Las dos contraseñas no verifican";
  }

  return $arrayDeErrores;
}

function armarUsuario($datos)  {
  return [
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "username" => $datos["username"],
    "email" => $datos["email"],
    "contrasenia" => password_hash($datos["contrasena"], PASSWORD_DEFAULT),
  ];
}

function guardarUsuario($usuario) {
  $json = json_encode($usuario);
  file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
}

function traerTodos() {
  $usuarios = [];

  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuarios[] = json_decode($linea, true);
    $linea = fgets($recurso);
  }
  fclose($recurso);

  return $usuarios;
}
function traerUsuario($username) {
  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuario = json_decode($linea, true);

    if ($usuario["username"] == $username) {
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);

  return null;
}
function traerPorEmail($email) {
  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuario = json_decode($linea, true);

    if ($usuario["email"] == $email) {
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);

  return null;
}
function loguear($username) {
  $_SESSION["usuarioLogueado"] = $username;
}

function logout() {
  session_destroy();
  setcookie("usuarioLogueado", "", -1);
}

function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function getUsuarioLogueado() {
  if (estaLogueado()) {
    return traerUsuario($_SESSION["usuarioLogueado"]);
  }
  else {
    return NULL;
  }
}

function recordar($username) {
  setcookie("usuarioLogueado", $username, time()+3600);
}
?>
