<?php


	include('cabecera.php');
	
?>
					
<?php
$p = "inicio";

if(isset($_GET['p'])){
	$p=$_GET['p'];
}
if($p=="inicio"){
	include('inicio.php');
}
if($p=="catalogo"){
	include("catalogo.php");
}
if($p=="login"){
	include("login.php");
}
if($p=="registro"){
	include("registro.php");
}
if($p=="user"){
	include("user.php");
}
if($p=="bici"){
	include("bici.php");
}
if($p=="reserva"){
	include("reservar.php");
}
if($p=="cuentas"){
	include("cuentas.php");
}
if($p=="alquiler"){
	include("alquiler.php");
}
if($p=="mreservas"){
	include("mreservas.php");
}
if($p=="factu"){
	include("facturacion.php");
}

?>			
	
<?php
	include_once('footer.php');
?>