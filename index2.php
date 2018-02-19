<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>ReserTiks</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquey
ry/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>

<!--<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<link href="jquery.gmaps.css" rel="stylesheet"/>
<script src="jquery.gmaps.js"></script>-->

<!-- Mapa2 Scrip
<script>
	$(document).ready(function () {
$('.gmaps').gmaps();
});
</script>

<style>

.gmaps {
height:250px;
width: 100%;
}
</style>t-->

<!--Mapa con ubicacion-->
<script>
	$(document).ready(function(){
		map = new GMaps({
			div: '#mapa',
			lat: -1.59044364,
			lng: -78.9991239,
			zoom: 15
		});
		
		map.addMarker({
			lat:  -1.59044364,
			lng:  -78.9991239,
			title: 'Cooperativa de Transportes Flota Bolívar',
			infoWindow: {
				content: '<img src="WhatsApp Image 2018-02-18 at 13.48.13(3).jpeg"><br><p>Estamos ubicados enVia Ambato Guaranda 307, Guaranda<br>Telf: 099 250 0369</p>'
			}
		});
		
	});
</script>
<!--Script para el slider-->
<script>
 
	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
 
	</script>

</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header" class="cabecera">
		<table width="100%" height="85px" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td align="left"><img src="ic_menu.png"></td>
    <td align="center"><img src="logoswe.png" width="192px" height="80px"></td>
    <td align="right"><a href="#page2"><img src="ic_siguiente.png"></a></td>
  </tr>
</table>
	</div>
	<div data-role="content">
		<div class="contenido">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><h1>Busca tu pasaje de bus en Ecuador!</h1></td>
  </tr>
  <tr>
    <td align="center">
    <div class="main">
		<div class="slides">
			<img src="ecu4.png" alt="">
			<img src="ecu3.png" alt="">
			<img src="ecu2.png" alt="">
            <img src="ecu1.png" alt="">
		</div>
	</div>
    </td>
  </tr>
  <tr>
    <td align="center"><h1>Rutas más buscadas</h1>
<font color="#6699CC" size="+1"><p>Nuestros clientes están viajando en estas rutas</p></font></td>
  </tr>
  <tr>
    <td align="center"><img src="Babahoyo.png" width="310"></td>
  </tr>
  <tr>
    <td align="center"><img src="domingo.png" width="310"></td>
  </tr>
  <tr>
    <td align="center"><img src="guayaquil.png" width="310"></td>
  </tr>
  <tr>
    <td align="center"><img src="quito.png" width="310"></td>
  </tr>
  <tr>
    <td align="center"><img src="riobamba.png" width="310"></td>
  </tr>
  <tr>
    <td align="center"><h1>Lo bueno de comprar en ReserTiks</h1></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="celular.png" width="50px"></td>
    <td align="center"><img src="like.png" width="50px"></td>
    <td align="center"><img src="reloj.png" width="50px"></td>
    <td align="center"><img src="seguro.png" width="50px"></td>
  </tr>
  <tr>
    <td align="center"><p>Compra desde la comodidad de tu casa u oficina</p></td>
    <td align="center"><p>Olvidate de hacer largas filas para comprar</p></td>
    <td align="center"><p>Pasajes disponibles 24 horas al día, 7 días de la semana</p></td>
    <td align="center"><p>Compra tus pasajes rápido y seguro</p></td>
  </tr>
</table>


        </div>		
	</div>
	<div data-role="footer" data-position="fixed" data-id="footer_fijo">
		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
  <tr align="center">
    <td><a href="#page"><img src="ic_inicio.png"></a></td>
    <td><a href="#page2" data-transition="slide" class="opa"><img src="ic_reservar.png"></a></td>
    <td><a href="#page3" data-transition="slide" class="opa"><img src="ic_viajes.png"></a></td>
    <td><a href="#page4" data-transition="slide" class="opa"><img src="ic_cuenta.png"></a></td>
    <td><a href="#page5" data-transition="slide" class="opa"><img src="ic_informacion.png"></a></td>
  </tr>
  <tr align="center">
    <td>Inicio</td>
    <td class="opa">Reservar</td>
    <td class="opa">Mis viajes</td>
    <td class="opa">Mi cuenta</td>
    <td class="opa">Información</td>
  </tr>
</table>

	</div>
</div>

<div data-role="page" id="page2">
	<div data-role="header" class="cabecera">
		<table width="100%"  height="85px" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td align="left"><img src="ic_menu.png"></td>
    <td align="center"><h3>Reserva tu boleto, ahora!</h3></td>
    <td align="right"><a href="#page3"><img src="ic_siguiente.png"></a></td>
  </tr>
</table>
	</div>
	<div data-role="content">	
		<div class="contenido">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="70px"><font size="-1">Desde</font></td>
    <td></td>
  </tr>
  <tr>
    <td align="center"><img src="ic_cdad.png"></td>
    <td><select name="cdad_orige" id="cdad_orige">
    <option>Ciudad de origen</option>
    <option>Guaranda</option>
    </select></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="90%"><hr></td>
    <td align="center"><img src="ic_flec.png"></td>
    <td width="20%"><hr></td>
  </tr>
</table>

		<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="70px"><font size="-1">A</font></td>
    <td></td>
  </tr>
  <tr>
    <td align="center"><img src="ic_cdad.png"></td>
    <td><select name="cdad_dest" id="cdad_dest">
    <option>Ingrese su destino</option>
    <option>Guayaquil</option>
    <option>Quito</option>
    <option>Santo Domingo</option>
    <option>Caluma</option>
    <option>San Luis</option>
    <option>Riobamba</option>
    <option>Chillanes</option>
    <option>Babahoyo</option>
    </select></td>
  </tr>
</table>
        </div><br>
        <div class="contenido">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100px"><font size="-1">Fecha de viaje</font></td>
    <td></td>
  </tr>
  <tr>
    <td align="center"><img src="ic_cale.png"></td>
    <td><input type="date"></td>
  </tr>
</table>
</div><br>
<div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="25px">
  <tr>
    <td align="center"><button type="submit" name="sig" id="sig" data-theme="e">Siguiente</button></td>
  </tr>
</table>
</div>		
	</div>
	<div data-role="footer" data-position="fixed" data-id="footer_fijo">
		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
  <tr align="center">
    <td><a href="#page" data-transition="slide"><img src="ic_inicio.png" class="opa"></a></td>
    <td><a href="#page2"><img src="ic_reservar.png"></a></td>
    <td><a href="#page3" data-transition="slide"><img src="ic_viajes.png" class="opa"></a></td>
    <td><a href="#page4" data-transition="slide"><img src="ic_cuenta.png" class="opa"></a></td>
    <td><a href="#page5" data-transition="slide"><img src="ic_informacion.png" class="opa"></a></td>
  </tr>
  <tr align="center">
    <td class="opa">Inicio</td>
    <td>Reservar</td>
    <td class="opa">Mis viajes</td>
    <td class="opa">Mi cuenta</td>
    <td class="opa">Información</td>
  </tr>
</table>

	</div>
</div>

<div data-role="page" id="page3">
	<div data-role="header" class="cabecera">
		<table width="100%" height="85px" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td align="left"><img src="ic_menu.png"></td>
    <td align="center"><h3>Mis Viajes</h3></td>
    <td align="right"><a href="#page4"><img src="ic_siguiente.png"></a></td>
  </tr>
</table>
	</div>
	<div data-role="content">	
		<div class="contenido">
        	<h2>Bienvenido: <?php echo $_SESSION['email']?></h2>
        	<table width="100%">
            	<tr>
                	<td align="center" width="50%"><input type="button" name="realizado" id="realizado" value="REALIZADO"></td>
                    <td align="center" width="50%"><input type="button" name="realizado" id="realizado" value="CANCELADO"></td>
                </tr>
            </table>
            <table>
            	<tr>
                	<td></td>
                </tr>
                <tr>
                	<td></td>
                </tr>
                <tr>
                	<td></td>
                </tr>
            </table>
        </div>		
	</div>
	<div data-role="footer" data-position="fixed" data-id="footer_fijo">
		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
  <tr align="center">
    <td><a href="#page" data-transition="slide"><img src="ic_inicio.png" class="opa"></a></td>
    <td><a href="#page2" data-transition="slide"><img src="ic_reservar.png" class="opa"></a></td>
    <td><a href="#page3"><img src="ic_viajes.png"></a></td>
    <td><a href="#page4" data-transition="slide"><img src="ic_cuenta.png" class="opa"></a></td>
    <td><a href="#page5" data-transition="slide"><img src="ic_informacion.png" class="opa"></a></td>
  </tr>
  <tr align="center">
    <td class="opa">Inicio</td>
    <td class="opa">Reservar</td>
    <td>Mis viajes</td>
    <td class="opa">Mi cuenta</td>
    <td class="opa">Información</td>
  </tr>
</table>

	</div>
</div>

<!--Cuadro de dialogo ingresar-->
<div data-role="page" id="ingresar">
	<!--Header-->
	<div data-role="header" class="cabecera_ingre" data-icon="delete">
		<table width="100%" border="0px" cellpadding="0px" cellspacing="0px">
  <tr>
    <td align="center"><a href="#page3"><img src="ic_volver.png"></a></td>
    <td align="center"><h3>Iniciar sesión / Registrarse</h3></td>
  </tr>
</table>
	</div>
	<div data-role="content">
    	<font face="Times New Roman, Times, serif"><p>Inicia sesión o Regístrate gratis con <font color="#0067B0"><strong>ReserTiks</strong></font>.</p></font>	
        <form action="login.php" method="post" data-ajax="false">
        <input type="email" name="email" id="email" placeholder="Correo electrónico" class="labels"><br>
        <input type="password" name="pass" id="pass" placeholder="Contraseña" class="labels"><br>
        <table width="100%" border="0px" cellpadding="0px" cellspacing="0px">
  <tr>
    <td align="center"><input type="submit" value="Iniciar sesión" data-theme="b" size="auto"></td>
    <td align="center"><a href="#registrar" data-role="button" data-rel="dialog" data-transition="slidedown" class="btn_reg">Regístrarse</a></td>
  </tr>
</table>
        </form>
               
        </div>		
	</div>
<!--Fin del cuadro de dialog.-->

<!--Cuadro de dialogo registro-->
<div data-role="page" id="registrar">
	<!--Header-->
	<div data-role="header" class="cabecera_ingre">
		<table width="100%" border="0px" cellpadding="0px" cellspacing="0px">
  <tr>
    <td align="center"><a href="#page3"><img src="ic_salir.png"></a></td>
    <td align="center"><h3>Registrarse</h3></td>
  </tr>
</table>
	</div>
	<div data-role="content">
    	<div id="msm"></div>
        <form id="formu" action="registrar.php" method="post">
        <!-- <form method="POST" id="form" data-ajax="false"> -->
        <font face="Times New Roman, Times, serif"><p>Inicia sesión o Regístrate gratis con <font color="#0067B0"><strong>ReserTiks</strong></font>.</p></font>	
        <input type="text" name="cod_ci" id="cod_ci" placeholder="Número de cedula" class="labels"><br>
        <input type="text" name="names" id="names" placeholder="Nombres" class="labels"><br>
        <input type="text" name="lastnames" id="lastnames" placeholder="Apellidos" class="labels"><br>
        <input type="text" name="num_cellphone" id="num_cellphone" placeholder="Número de teléfono" class="labels"><br>
        <input type="email" name="email" id="email" placeholder="Correo electrónico" class="labels"><br>
        <input type="password" name="pass" id="pass" placeholder="Contraseña" class="labels"><br>
        <input type="text" name="txtFoto" id="txtFoto" placeholder="Ingresar foto">
        <table width="100%" border="0px" cellpadding="0px" cellspacing="0px">
  <tr>
    <td align="center"><button id="btnAgregar" type="submit">Agregar</button></td>
    <td align="center"><a href="#ingresar" data-role="button" data-rel="dialog" data-transition="slidedown" class="btn_cancelar" data-theme="e">Cancelar</a></td>
  </tr>
</table>  
        
        <!-- <input type="submit" id="btnAgregar" value="Agregar"> -->
        </form>
           
        </div>		
	</div>
<!--Fin del cuadro de dialog.-->

<!--Mi cuenta pagina 4-->
<div data-role="page" id="page4">
	<div data-role="header" class="cabecera">
		<table width="100%"  height="85px" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td align="left"><img src="ic_menu.png"></td>
    <td align="center"><h3>Mi Cuenta</h3></td>
    <td align="right"><a href="#page5"><img src="ic_siguiente.png"></a></td>
  </tr>
</table>
	</div>
<!--Cuerpo de pagina-->
	<div data-role="content">	
		<div class="contenido">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><font color="#0000">INFORMACIÓN PERSONAL</font></td>
    <td><a href="">EDITAR</a></td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
    <td>Nombre</td>
  </tr>
  <tr>
    <td><?php $txtFoto=$_GET['txtFoto']; echo $txtFoto ?></td>
    <td><?php $names=$_GET['names']; echo $names ?></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
    <td>Número de telefono</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  <table>
  <tr>
    <td></td>
    <td width="50px"></td>
    <td><?php $num_cellphone=$_GET['num_cellphone']; echo $num_cellphone ?></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
    <td>Email</td>
  </tr>
  <tr>
    <td></td>
    <td><?php $emaile=$_GET['email']; echo $email ?></td>
  </tr>
</table>
	<table width="100%">
    	<tr>
        	<td align="right"><a href="cerrar_sesion.php">Cerrar sesión</a></td>
        </tr>
    </table>

        </div>		
	</div>
    <!--Pie de pagina-->
	<div data-role="footer" data-position="fixed" data-id="footer_fijo">
		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
  <tr align="center">
    <td><a href="#page" data-transition="slide"><img src="ic_inicio.png" class="opa"></a></td>
    <td><a href="#page2" data-transition="slide"><img src="ic_reservar.png" class="opa"></a></td>
    <td><a href="#page3" data-transition="slide"><img src="ic_viajes.png" class="opa"></a></td>
    <td><a href="#page4"><img src="ic_cuenta.png"></a></td>
    <td><a href="#page5" data-transition="slide"><img src="ic_informacion.png" class="opa"></a></td>
  </tr>
  <tr align="center">
    <td class="opa">Inicio</td>
    <td class="opa">Reservar</td>
    <td class="opa">Mis viajes</td>
    <td>Mi cuenta</td>
    <td class="opa">Información</td>
  </tr>
</table>

	</div>
</div>

<div data-role="page" id="page5">
	<div data-role="header" class="cabecera">
		<table width="100%" height="85px" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td align="left"><img src="ic_menu.png"></td>
    <td align="center"><h3>Información</h3></td>
    <td align="right"><a href="#page"><img src="ic_siguiente.png"></a></td>
  </tr>
</table>
	</div>
	<div data-role="content">	
		<div class="contenido">
         <table width="100%">
         	<tr>
         		<td align="center"><img src="logoswe.png" width="180px"></td>
         	</tr>
         	<tr>
         		<td align="center"><h1>ReserTiks</h1></td>
         	</tr>
            <tr>
         		<td align="justify"><p>ReserTiks es una aplicación diseñada con el proposito de reservar boletos en línea, para las distintas cooperativas de transportes terrestres interprovinciales del Ecuador.<br>Esta aplicación le es de gran ayuda a los pasajeros ya que permite:<br>
                <ul>
                <li>Comprar desde la comodidad de su hogar u oficina.</li>
                <li>Evitar largas filas en las terminales terrestres para comprar un boleto.</li>
                <li>Disponibilidad de pasajes las 24 horas del dia, los 7 dias de la semana.</li>
                <li>Comprar sus pasajes rápido y seguro.</li>
                </ul><br>Reserva ya tu boleto con ReserTiks.</p></td>
         	</tr>
         </table>
         
         <h2 align="center">Cooperativa flota bolivar</h2>
         <p align="justify">Nuevas unidades de transportes con una excelente comonidad para su viaje.<br>Todas las unidades tienen zona de WiFi en cada unidad y comodidad que se merece el usuario.<br>Viaje con seguridad y comodidad en la Cooperativa de Transporte Terrestre Flota Bolívar.<br><img src="WhatsApp Image 2018-02-18 at 13.48.13(5).jpeg" width="100%"></p>
         <table width="100%">
         	<tr>
         	<td align="center"><h3>Ubicacion Terminal Terreste Folta Bolivar</h3></td>
         	</tr>
            <tr>
         	<td align="center"></td>
         	</tr>
            <tr>
         	<td align="center">
            <div id="mapa" style="width:100%; height:300px;"></div>
            <!--
        	<div data-key="APIKEY"
				data-control-zoom="true"
				data-control-type="true"
                data-control-scale="true"
                data-control-streetview="true"
                data-control-rotate="true"
                data-event-mousewheel="true"
                
                data-zoom="15" role="map" class="gmaps">
                
                <!-- items de ubicaciones --><!--
                
                <div
				data-id="1"
                data-lat="-1.59044364"
                data-lng="-78.9991239"
                data-marker-image="localizacion.jpg"
                	data-marker-width="35"
                    data-marker-height="43"
                class="marker">
                <div class="map-card">
                <h1>Coop. Flota Bolívar</h1>
                <p>Nuestras oficinas se encuentran ubicadas aqui</p>
                <p>Phone: +56753223344</p>
                <p>e-Mail: fake1@email.com</p>
                </div>
                </div>
                
            </div>-->
</td>
         	</tr>
         </table>
        </div>		
	</div>
	<div data-role="footer" data-position="fixed" data-id="footer_fijo">
		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
  <tr align="center">
    <td><a href="#page" data-transition="slide"><img src="ic_inicio.png" class="opa"></a></td>
    <td><a href="#page2" data-transition="slide"><img src="ic_reservar.png" class="opa"></a></td>
    <td><a href="#page3" data-transition="slide"><img src="ic_viajes.png" class="opa"></a></td>
    <td><a href="#page4" data-transition="slide"><img src="ic_cuenta.png" class="opa"></a></td>
    <td><a href="#page5"><img src="ic_informacion.png"></a></td>
  </tr>
  <tr align="center">
    <td class="opa">Inicio</td>
    <td class="opa">Reservar</td>
    <td class="opa">Mis viajes</td>
    <td class="opa">Mi cuenta</td>
    <td>Información</td>
  </tr>
</table>

	</div>
</div>

</body>
</html>
