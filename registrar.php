<?php
session_start();
require_once('conexion.php');

// Recogemos los datos del formulario
$nom_usuari = $_POST['nombre'];
$nickname_usuari = $_POST['usuario'];
$correo_usuari = $_POST['correo'];
$password_usuari = $_POST['pass1'];
$password_usuari = $_POST['pass2'];

// Añadimos el nuevo usuario a la base de datos
$consulta = "INSERT INTO usuario(nom_usuari,nickname_usuari,correo_usuari,password_usuari)VALUES('$nombre','$apellido','$correo','$clave2')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: index.php?id=entrar');

?>
