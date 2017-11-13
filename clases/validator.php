<?php

require_once("DB.php");

class Validator {
  public function validarLogin(DB $db) {
		$arrayDeErrores = [];


		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Te equivocaste en el email";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "El formato del mail es incorrecto";
		}
		else if ($db->traerPorEmail($_POST["email"]) == null) {
			$arrayDeErrores["email"] = "El mail no se encuentra en la base";
		}
		else {
			//El mail existe!!
			$usuario = $db->traerPorEmail($_POST["email"]);

			if (password_verify($_POST["contrasenia"], $usuario->getPassword()) == false) {
				$arrayDeErrores["contrasenia"] = "La contraseña es incorrecta";
			}
		}

		return $arrayDeErrores;
	}

  public function validarInformacion(DB $db) {
		$arrayDeErrores = [];

		$nombreArchivo = $_FILES["avatar"]["name"];

		$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

		if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
			$arrayDeErrores["avatar"] = "Hubo un error al subir el archivo";
		}
		else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png") {
			$arrayDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
		}

		if ($_POST["nombre"] == "") {
			$arrayDeErrores["nombre"] = "Por favor ingresar un nombre";
		}
      	if ($_POST["apellido"] == "") {
          $arrayDeErrores["apellido"] = "Por favor ingresar un apellido";
      	}
		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Por favor ingresar un email";
		}
		else if ($db->traerPorEmail($_POST["email"]) != null) {
			$arrayDeErrores["email"] = "El mail esta repetido";
		}
		if (strlen($_POST["contrasenia"]) < 6) {
			$arrayDeErrores["contrasenia"] = "Tu contraseña debe tener al menos 6 caracteres";
		}
		else if ($_POST["contrasenia"] != $_POST["contrasena_confirm"]) {
			$arrayDeErrores["contrasenia"] = "Las contraseñas no verifican";
		}

		return $arrayDeErrores;
	}
}

?>
