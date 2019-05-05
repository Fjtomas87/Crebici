<?php

$bici = new Bici();
$bici->getTodos();
$rows=$bici->getBicis();
?>
    <div class="row justify-content-between">
    
<?php
    foreach($rows as $row){
?>
    <div class="m-3 p-3 col-5 col-md-3">
        <a href="index.php?p=bici&b=<?php echo $row['idBici'] ?>">
            <img src="<?php echo $row['foto']; ?>" class="img-fluid rounded img-thumbnail" alt="Bicicleta <?php echo $row['marca'] ?>">
                <h2><?php echo $row['marca'], " ", $row['modelo']; ?></h2>
            <span>Precio: <?php echo $row['pvp'] ?> €/Dia</span>
        </a>
    </div>
   
<?php
        
}

?>
 </div>