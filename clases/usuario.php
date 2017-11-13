<?php

class Usuario {
  private $nombre;
  private $apellido;
  private $username;
  private $email;
  private $contrasenia;
  private $id;

  public function __construct($nombre, $apellido, $username, $email, $contrasenia, $id = null) {
    if ($id == null) {
      // Viene por POST
      $this->contrasenia = password_hash($contrasenia, PASSWORD_DEFAULT);
    } else {
      // Viene de la base
      $this->contrasenia = $contrasenia;
    }

    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->username = $username;
    $this->email = $email;
    $this->id = $id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  public function getApellido() {
    return $this->apellido;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getUsername() {
    return $this->username;
  }

  public function setUsername($username) {
    $this->username = $username;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getPassword() {
    return $this->contrasenia;
  }

  public function setPassword($password) {
    $this->contrasenia = $contrasenia;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function toArray() {
    return [
      "id" => $this->id,
      "email" => $this->email,
      "contrasenia" => $this->contrasenia,
      "nombre" => $this->nombre,
      "apellido" => $this->apellido,
      "username" => $this->username
    ];
  }













}

?>
