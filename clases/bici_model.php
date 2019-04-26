<?php
require_once('db_abstract_model.php');
class Bici extends DBAbstractModel {
	public $idBici; 
	public $modelo;
	public $descrip; 
	public $peso;
	public $pvp;
    public $foto;
    public $idC;
	

	function __construct($idBici,$modelo,$descrip,$peso,$pvp,$foto,$idC) {
		$this->idBici=$idBici;
        $this->modelo=$modelo;
        $this->descrip=$descrip;
        $this->peso=$peso;
        $this->pvp=$pvp;
        $this->foto=$foto;
        $this->idC=$idC;   
	}
	

}
?>
