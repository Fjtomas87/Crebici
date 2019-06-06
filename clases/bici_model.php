<?php
require_once('db_abstract_model.php');
class Bici extends DBAbstractModel {
	protected $idBici; 
    protected $marca;
	protected $modelo;
	protected $descrip; 
	protected $peso;
	protected $pvp;
    protected $foto;
    protected $idC;
	

	function __construct() {
        $this->db_name = 'crebici_bd';
	}
    
    public function getBicis(){
		return $this->rows;
	}
    
	public function getTodos() {
		$this->query = "
		SELECT idBici, marca, tipo, modelo, descrip, peso, pvp, foto
		FROM bicis";
		$this->get_results_from_query(); 
		
	}
    public function getByT($tipo='') {
       
            $this->query = "
            SELECT idBici, marca, tipo, modelo, descrip, peso, pvp, foto
            FROM bicis
            WHERE tipo = '$tipo'
            ";
            $this->get_results_from_query();
    }
    public function getByM($marca='') {
       
            $this->query = "
            SELECT idBici, marca, tipo, modelo, descrip, peso, pvp, foto
            FROM bicis
            WHERE marca = '$marca'
            ";
            $this->get_results_from_query();
    }
    
    public function getBiciByTipo($tipo='', $idBici='') {
       
            $this->query = "
            SELECT idBici, marca, tipo, modelo, descrip, peso, pvp, foto
            FROM bicis
            WHERE tipo = '$tipo' AND idBici != '$idBici' LIMIT 3
            ";
            $this->get_results_from_query();
    }
    
    public function get($idBici='') {
        if($idBici != ''){
            $this->query = "
            SELECT idBici, marca, tipo, modelo, descrip, peso, pvp, foto
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
            (marca, tipo, modelo, descrip, peso, pvp, foto)
            VALUES
            ('$marca',' $tipo', '$modelo', '$descrip', '$peso', '$pvp', '$pvp', '$foto')
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
            SET marca='$marca'
            tipo='$tipo'
            modelo='$modelo',
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
    
    public function getIdBici(){
        return $this->idBici;
    }
    
    
    public function getMarca(){
        return $this->marca;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function getDescrip(){
        return $this->descrip;
    }
    
    public function getPeso(){
        return $this->peso;
    }
    
    public function getPvp(){
        return $this->pvp;
    }
    
    public function getFoto(){
        return $this->foto;
    }
}
?>