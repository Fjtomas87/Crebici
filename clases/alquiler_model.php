<?php
require_once('db_abstract_model.php');
class Alquiler extends DBAbstractModel {
	protected $idA;
    protected $fechaIni;
    protected $dias;
    protected $idC; 
    protected $idBici; 
	protected $estado;

	function __construct() {
        $this->db_name = 'crebici_bd';
	}
    
	public function getAlquileres(){
		return $this->rows;
	}
    
    public function getTodos(){
        $this->query = "
        SELECT *
        FROM alquiler
        ";
        $this->get_results_from_query();
    }
    public function modificarEstado($idA, $estado){
        $this->query = "
        UPDATE alquiler
        SET estado='$estado'
        WHERE idA = '$idA'
        ";
        $this->execute_single_query();        
    }
    
    public function get($idA='') {
        if($idA != ''){
            $this->query = "
            SELECT idA, fechaIni, dias, idC, idBici, estado
            FROM alquiler
            WHERE idA = '$idA'
            ";
            $this->get_results_from_query();
        }
        if(count($this->rows) == 1){
            foreach ($this->rows[0] as $propiedad=>$valor){
                $this->$propiedad = $valor;
            }
        }
    }
    
    public function set($alquiler_data=array()) {
            foreach ($alquiler_data as $campo=>$valor){
                $$campo = $valor;
            }
            $this->query = "
            INSERT INTO alquiler
            (fechaIni, dias, idC, idBici, estado)
            VALUES
            ('$fechaIni', '$dias', '$idC', '$idBici', '$estado')
            ";
            $this->execute_single_query();
    }
    public function edit($alquiler_data=array()) {
        foreach ($alquiler_data as $campo=>$valor){
            $$campo = $valor;
        }
        $this->query = "
            UPDATE alquiler
            SET fechaIni='$fechaIni',
            dias='$dias',
            idC='$idC',
            idBici='$idBici',
            estado='$estado'
            WHERE idA = '$idA'
        ";
        $this->execute_single_query();
    }
    
    public function delete($idA='') {
        $this->query = "
        DELETE FROM alquiler
        WHERE idA = '$idA'
        ";
        $this->execute_single_query();
    }
    
    public function getIdA(){
        return $this->idA;
    }	
    public function getFechaIni(){
        return $this->fechaIni;
    }	
    public function getDias(){
        return $this->dias;
    }	
    public function getIdC(){
        return $this->idC;
    }	
    public function getIdBici(){
        return $this->idBici;
    }	
    public function getEstado(){
        return $this->estado;
    }	
}
?>