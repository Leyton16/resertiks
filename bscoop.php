<?php

 $cdad_dest="";
 $busqueda="";
 $cdad_dest=$_POST['cdad_dest'];
 mysql_connect("localhost","root","");
 mysql_select_db("bd_resertiks");
 if(!$cdad_dest){	 
	echo "No se a encontrado ningun registro";
	exit;
}else{
	 $busqueda=mysql_query("select * from cooperativa where origen like '%".$cdad_dest."%'");
 }
 echo '<table width="778" height="32" border="3">
  <tr>
    <td align="center">Nombre</td>
    <td align="center">Apellido</td>
    <td align="center">Email</td>
    <td align="center">Nacimiento</td>
    <td align="center">Genero</td>
    <td align="center">Celular</td>
    <td align="center">Direccion</td>
    <td align="center">Referencia</td>
	<td align="center"><a href="formulario.php"><input type="button" name="btnInicio" id="btnInicio" value="Inicio" /></a></td>
  </tr>';

 while($muestra=mysql_fetch_array($busqueda)){
	 
echo '<tr>';
	echo '<td align="center">' .$muestra['nombre'].'</td>';
	echo '<td align="center">' .$muestra['apellido'].'</td>';
	echo '<td align="center">' .$muestra['email'].'</td>';
	echo '<td align="center">' .$muestra['nacimiento'].'</td>';
	echo '<td align="center">' .$muestra['genero'].'</td>';
	echo '<td align="center">' .$muestra['celular'].'</td>';
	echo '<td align="center">' .$muestra['direccion'].'</td>';
	echo '<td align="center">' .$muestra['referencia'].'</td>';
	echo '<td align="center">'.'<a href="modificar.php?email='.$muestra['email'].' & nombre='.$muestra['nombre'].' & apellido='.$muestra['apellido'].' & genero='.$muestra['genero'].' & celular='.$muestra['celular'].' & direccion='.$muestra['direccion'].' & referencia='.$muestra['referencia'].'">Modificar</a>'.'</td>';
	echo '<td align="center">'.'<a href="eliminar.php?email='.$muestra['email'].'">Eliminar</a>'.'</td>';
}

?>