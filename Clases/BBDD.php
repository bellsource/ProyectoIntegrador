<?php
class BBDD{

    private $user;
    private $pass;
    private $db_name;
    private $host;
    private $conexion;

    public function __construct($db_name,$user = "root",$pass = "root",$host = "localhost"){
        $this->user = $user;
        $this->pass = $pass;
        $this->db_name = $db_name;
        $this->host = $host;

        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        try{
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
            $this->conexion = new PDO($dsn, $this->user, $this->pass, $opciones);
        }catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
    }
    
    public function getUser() {
        return $this->user;
    }

    public function  setuser($user) {
        return $this->user;
    }
    
    public function getPass() {
        return $this->pass;
    }

    public function  setPass($pass) {
        return $this->pass;
    }

    public function getDb_name() {
        return $this->db_name;
    }

    public function  setDb_name($db_name) {
        return $this->db_name;
    }

    public function getHost() {
        return $this->host;
    }

    public function  setHost($host) {
        return $this->host;
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function  setConexion($conexion) {
        return $this->conexion;
    }

    public function traerUsuario($id){
        $consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE $id = usuarios.id");
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function insertarUsuario($usuario){
        $consulta= $this-> prepare("INSERT INTO usuarios (nombre, apellido, email, pass) VALUES ( $usuario-> getNombre(), $usuario-> getApellido(), $usuario-> getEmail(), $usuario-> getPass(), $usuario-> getFoto(), $usuario-> getAdmin())");    
        $consulta->execute();
    }
    
    public function updateUsuario($id,$nom,$ape,$email){
        $consulta= $this->conexion->query("UPDATE usuarios SET nombre = '$nom', apellido = '$ape', email = '$email' WHERE id = $id");
        var_dump("UPDATE usuarios SET nombre = $nom, apellido = $ape, email = $email WHERE id = $id");
        // $consulta->execute(); 
    }

    public function traerLibros(){
        $consulta = $this->conexion->query("SELECT * FROM Libros");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function traerGeneros(){
        $consulta = $this->conexion->query("SELECT * FROM genres");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function traerLibrosPorGenero($genero_id){
        $consulta = $this->conexion->prepare("SELECT * FROM Libros WHERE genero_id = :genero_id");
        $consulta->bindValue(":genero_id",$genero_id);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarGenero($id,$nuevoName){

    }

}