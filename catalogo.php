<?php
// Pagina del catalogo
//Se buscan todas las bicis de la base de datos dependiendo del tipo o marca segun se especifique en el GET y si no se muestran todas
if(isset($_GET['m'])){
    $marca = $_GET['m'];
    $bici = new Bici();
    $bici->getByM($marca);
    $rows=$bici->getBicis();
    $titulo = $marca;
}else if(isset($_GET['t'])){
    $tipo = $_GET['t'];
    $bici = new Bici();
    $bici->getByT($tipo);
    $rows=$bici->getBicis();
    $titulo = $tipo;
}else{
    $bici = new Bici();
    $bici->getTodos();
    $rows=$bici->getBicis();
    $titulo = "CATALOGO";
}
?>
   
        
             
                  
     <h1 class="mx-auto"><?php echo $titulo; ?></h1>
    <div class="row justify-content-around mx-auto">
       
<?php
    foreach($rows as $row){
?>
    <div class="m-2 p-4 col-9 col-sm-5 col-lg-3 border opac biciCata rounded">
        <a href="index.php?p=bici&b=<?php echo $row['idBici']; ?>" class="link-bicis">
            <img src="<?php echo $row['foto']; ?>" class="img-fluid rounded img-thumbnail mb-2" alt="Bicicleta <?php echo $row['marca'] ?>">
                <h2 class="text-center"><?php echo $row['marca'], " ", $row['modelo']; ?></h2>
            <span class="d-flex justify-content-center">Precio: <?php echo $row['pvp'] ?> €/Dia</span>
        </a>
    </div>
   
<?php
        
}

?>
 </div>