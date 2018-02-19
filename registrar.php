<?php
$cod_ci = $_POST['cod_ci'];
$names = $_POST['names'];
$lastnames = $_POST['lastnames'];
$num_cellphone = $_POST['num_cellphone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$txtFoto = $_POST['txtFoto'];

$conexion = mysqli_connect("localhost","root","");
if(!$conexion){
	echo "<p>No se ha podido registrar</p>";
	}
else{
	$db=mysqli_select_db($conexion,"bd_resertiks");
	$sql="INSERT INTO pasajero(cod_ci, names, lastnames, num_cellphone, email, pass, txtFoto) VALUES ('$cod_ci','$names','$lastnames','$num_cellphone','$email','$pass', '$txtFoto')";
  mysqli_query($conexion, $sql);
  echo "<p>Registro con exito</p>";
  header('Location: index.html');
}
?>
