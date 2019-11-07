<?php
$dsn = 'mysql:host=localhost;dbname=db_libroscoolto';
$nombre_usuario = 'root';
$contraseña = 'root';
$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$bbdd = new PDO($dsn, $nombre_usuario, $contraseña, $opciones);