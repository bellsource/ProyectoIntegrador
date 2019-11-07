<?php

class Usuarios {
    private $nombre;
    private $apellido;
    private $email;
    private $pass;
    private $foto;
    private $admin;

    public function __construct ($nombre, $mail, $pass, $admin) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->pass = $pass;
        $this->foto = $foto;
        $this->admin= $admin;
  }

    public function getNombre() {
        return $this->nombre;
    }

    public function  setNombre($nombre) {
        return $this->nombre;
    }

    public function  getApellido() {
        return $this->apellido;
    }
    public function  setApellido($apellido) {
        return $this->apellido;
    }

    public function  getEmail() {
        return $this->email;
    }
    public function  setEmail($email) {
        return $this->email;
    }

    public function  getPass() {
        return $this->pass;
    }
    public function  setPass($pass) {
        return $this->pass;
    }

    public function  getFoto() {
        return $this->foto;
    }
    public function setFoto($foto) {
        return $this->foto;
    }

    public function  getAdmin() {
        return $this->admin;
    }
    public function setAdmin($admin) {
        return $this->admin;
    }

}