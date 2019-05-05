<?php
	include('cabecera.php');
	require('clases/usuario_model.php');
	require('clases/bici_model.php');
	require('clases/alquiler_model.php');
?>
					
<?php
$p = "inicio";

if(isset($_GET['p'])){
	$p=$_GET['p'];
}
if($p=="inicio"){
	include('inicio.php');
}
if($p=="alta"){
	include("alta.php");
}
if($p=="modif"){
	include("modificar.php");
}
if($p=="borrar"){
	include("borrar.php");
}
if($p=="todos"){
	include("verTodos.php");
}

?>			
	
<?php
	include('footer.php');
?>
               
