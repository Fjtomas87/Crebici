<?php
require_once('db_abstract_model.php');
class Alquiler extends DBAbstractModel {
	public $idA;
    public $fechaExp;
    public $idC; 
    public $idBici; 
	public $estado;
	

	function __construct() {
        $this->db_name = 'crebici_bd';
	}
	
    public function get($idA='') {
        if($idA != ''){
            $this->query = "
            SELECT idA, fechaExp, idC, idBici, estado
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
            (fechaExp, idC, idBici, estado)
            VALUES
            ('$fecha', '$idC', '$idBici', '$estado')
            ";  
            $this->execute_single_query();
    }
    public function edit($alquiler_data=array()) {
        foreach ($alquiler_data as $campo=>$valor){
            $$campo = $valor;
        }
        $this->query = "
            UPDATE alquiler
            SET fechaExp='$fechaExp',
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
}
?>