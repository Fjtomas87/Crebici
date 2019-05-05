<?php
session_start();

if(isset($_GET['d'])){
    if($_GET['d']==1){
        session_unset();
        session_destroy();
    }
}
    
    require('clases/usuario_model.php');
	require('clases/bici_model.php');
	require('clases/alquiler_model.php');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SEO incompleto">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/estilo.css" />
    <title>Cribici</title>
  </head>
<head>


<link rel="shortcut icon" href="/favicon.ico" />
</head>
 
<body class="container-fluid bg-primary" style="border">
  
    
    <header class="row">
        <nav class=" col-12 navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand ml-5"><img src="imagen/logo.jpg" style="width:50px"></a>
            <a href="#" class="navbar-brand ">CREBICI</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item"><a href="index.php?p=catalogo" class="nav-link">Catalogo</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 2</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 3</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 4</a></li>
                    <?php
                    if(isset($_SESSION['email'])){
                        ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop1"><?php echo $_SESSION['email']; ?> </a>
                                <div class="dropdown-menu">
                                    <a href="index.php?p=user" class="dropdown-item">Cuenta</a>
                                    <a href="index.php?d=1" class="dropdown-item">Cerrar sesion</a>
                                </div>
                        </li>
                        
                        
                        <?php
                    }else{
                        ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop2">Cuenta</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?p=registro" class="dropdown-item">Registrar</a>
                                    <a href="index.php?p=login" class="dropdown-item">Acceder</a>
                                </div>
                        </li>
                        <?php
                    }
                    ?>
                    
                </ul>
            </div> 
        </nav>  
    </header>
    <div class="row">
        <section class="p-4 col-12 col-md-10 border bg-success container">
           <article>