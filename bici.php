<?php
if(isset($_GET['b'])){
    $bici = new Bici();
    $bici->get($_GET['b']);
    $descrip = $bici->getDescrip();
    $desc = explode("-", $descrip);
?>
   <div> 
<div class="row m-1 mt-4 p-3 opac rounded text-center" >
    <div class="col-10 col-sm-6 col-md-5">
        <img src=" <?php echo $bici->getFoto(); ?>" id="imagenBici" alt="Bicicleta<?php echo $bici->getMarca(); ?>" class="img-fluid rounded img-thumbnail">
    </div>
    <div class="col-10 col-sm-7">
        <h3><?php echo $bici->getMarca(), " ", $bici->getModelo(); ?> </h3>
        <h3>Precio: <?php echo $bici->getPvp() ?> €/dia</h3>
            <div class="container text-center">
            <h3 class="mt-3">Descripción</h3>
            <ul>
            <?php
            
            for($i =0; $i< count($desc);$i++){
                
                echo "<li class='row'>";
                echo "<span class='col text-capitalize'>".$desc[$i]."</span>";
                echo "</li>";
            }

            ?>
            </ul>
        </div>
        <form action="index.php?p=reserva&b=<?php echo $bici->getIdBici(); ?>" method="post">
            <button class="btn-outline-primary bg-warning my-4" type="submit" name="reservar">Reservar</button>
        </form>
    </div> 
</div> 
<div class="row m-3 p-3 orange  mx-auto rounded">
  <h2 class="col-12" style="text-align:center">Productos relacionados</h2>
    
        <?php
        $tipo=$bici->getTipo();
        $idBici=$bici->getIdBici();
        $biciAux= new Bici();
        $biciAux->getBiciByTipo($tipo,$idBici);
        $rows=$biciAux->getBicis();
        foreach($rows as $row){       
        ?>
        <div class="col-12 col-md-3 m-3 p-3 opac rounded border">
            <a href="index.php?p=bici&b=<?php echo $row['idBici'] ?>">
                <h3><?php echo $row['marca']," ", $row['modelo']; ?></h3>
                <img src="<?php echo $row['foto']; ?>" alt="Bicicleta <?php echo $row['marca']; ?>" class="img-fluid opac-0 rounded img-thumbnail">
            </a>
        </div>
        <?php
        }
        ?>
   
    
</div> 
   </div>  
    
  <?php  
}
?>