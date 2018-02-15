<?php
include('conex.php');

$cedula = $_POST['cod_ci'];
$nombres = $_POST['names'];
$apellidos = $_POST['lastnames'];
$celular = $_POST['num_cellphone'];
$correo = $_POST['email'];
$contrasena = $_POST['pass'];
$foto = $_POST['txtFoto'];

if($inserta = mysql_query("INSERT INTO `pasajero` VALUES(`$cedula`,`$nombres`,`$apellidos`,`$celular`,`$correo`,`$contrasena`,`$foto`)"))
{
	echo "Registro exitoso";
}
else{
	echo "Error al registrar datos!".mysql_error();
}
?>