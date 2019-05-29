<?php
// Pagina del catalogo
//Se buscan todas las bicis de la base de datos y se muestran
$bici = new Bici();
$bici->getTodos();
$rows=$bici->getBicis();
?>
    <div class="row justify-content-between">
    
<?php
    foreach($rows as $row){
?>
    <div class="m-3 p-3 col-9 col-sm-5 col-md-3 border biciCata rounded">
        <a href="index.php?p=bici&b=<?php echo $row['idBici']; ?>" class="link-bicis container">
            <img src="<?php echo $row['foto']; ?>" class="img-fluid rounded img-thumbnail" alt="Bicicleta <?php echo $row['marca'] ?>">
                <h2 class="text-center"><?php echo $row['marca'], " ", $row['modelo']; ?></h2>
            <span class="">Precio: <?php echo $row['pvp'] ?> €/Dia</span>
        </a>
    </div>
   
<?php
        
}

?>
 </div>