<?php

//Generar Respuesta JSON con PHP y MySQL

	//Se genera la conexion a la base de datos MySQL
	
		$host = "localhost";
		$usuario = "root";
		$pass = " ";
		$bd = "bd_resertiks";

		$servidor = mysql_connect($host, $usuario, $pass);
		//1_Se elige el formato de datos para la conexion UTF8
		mysql_set_charset("utf8", $servidor);
		$conxion = mysql_select_db($bd, $servidor);
		
			//Se prepara la peticion 
			
			//2_Se establece la consulta a la BD
			$consulta = "SELECT * FROM pasajero";
			$sql = mysql_query($consulta);	
			
			if ( ! $sql){
				echo "La conexion no se logro".mysql_error();
				die;
			}
			
			//3_Se declara un arreglo
			$datos = array();
							//Se genera el archivo JSON
			while ($obj = mysql_fetch_object($sql)){
				$datos[] = array('cod_ci' => $obj ->cod_ci,
								'names' => utf8_encode($obj->names),
								'lastnames' => $obj->lastnames,
								'num_cellphone' => $obj->num_cellphone,
								'email' => $obj->email,
								'txtFoto' => $obj->txtFoto,	
				);	
			}
				echo '' . json_encode($datos) . '';
							
				mysql_close($servidor);//Se cierra la conexion 
							
						//Se declara que esta es una aplicacion que genera un JSON
				header('Content-type: application/json');
				//Se abre el acceso a las conexiones que requieran de esta aplicacion
				header("Access-Control-Allow-Origin: *");
							
?>
