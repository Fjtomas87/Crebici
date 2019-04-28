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
	
    public function get($idBici='') {
        if($idBici != ''){
            $this->query = "
            SELECT idBici, modelo, descrip, peso, pvp, foto, idC
            FROM bicis
            WHERE idBici = '$idBici'
            ";
            $this->get_results_from_query();
        }
        if(count($this->rows) == 1){
            foreach ($this->rows[0] as $propiedad=>$valor){
                $this->$propiedad = $valor;
            }
        }
    }
    public function set($bici_data=array()) {
        if(array_key_exists('idBici', $bici_data)){
            $this->get($bici_data['idBici']);
            foreach ($user_data as $campo=>$valor){
                $$campo = $valor;
            }
            $this->query = "
            INSERT INTO bicis
            (modelo, descrip, peso, pvp, foto)
            VALUES
            ('$modelo', '$descrip', '$peso', '$pvp', '$pvp', '$foto')
            ";
            $this->execute_single_query();
        }
    }
    public function edit($bici_data=array()) {
        foreach ($bici_data as $campo=>$valor){
            $$campo = $valor;
        }
        $this->query = "
            UPDATE bicis
            SET modelo='$modelo',
            descrip='$descrip',
            peso='$peso',
            pvp='$pvp',
            foto='$foto'
            WHERE idBici = '$idBici'
        ";
        $this->execute_single_query();
        }
    public function delete($idBici='') {
        $this->query = "
        DELETE FROM bicis
        WHERE idBici = '$idBici'
        ";
        $this->execute_single_query();
    }
    function __destruct() {
        unset($this);
    }
}
?>
