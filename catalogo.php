<?php
// Pagina del catalogo
//Se buscan todas las bicis de la base de datos y se muestran
$bici = new Bici();
$bici->getTodos();
$rows=$bici->getBicis();
?>
    <div class="row justify-content-around mx-auto ">
    
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