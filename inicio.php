<?php

include('cabecera.php');
require('clases/usuario_model.php');
require('clases/bicis_model.php');
require('clases/alquiler_model.php');


$p = "inicio";


if(isset($_GET['p'])){
	$p=$_GET['p'];
}









?>
<h2>Titulo de contenido</h2>
<p> Contenido </p>