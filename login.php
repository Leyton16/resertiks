<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

//Conectar con la base de datos
$conexion = mysqli_connect("localhost","root","","bd_resertiks");
//Realiza la busqueda
$consulta = "SELECT * FROM pasajero WHERE email='$email' and pass='$pass'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
	header("location:index2.php");
	
}else{
	echo"<p>Error en la autentificación</p>";
	
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>