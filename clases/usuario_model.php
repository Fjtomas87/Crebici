<?php
require_once('db_abstract_model.php');
class Usuario extends DBAbstractModel {
    protected $idC;
	protected $nombre;
	protected $email;
    protected $pass;
	protected $apellido1;
	protected $dni;
    protected $direcion;
    protected $tipoUser;
    function __construct() {
        $this->db_name = 'crebici_bd';
	}
    public function getUsers(){
		return $this->rows;
	}
    public function getTodos($email=''){
        $this->query = "
        SELECT *
        FROM usuarios
        WHERE email != '$email'
        ";
        $this->get_results_from_query();
    }
    
    public function getUser($email, $pass) {
		
        $this->query = "
        SELECT idC, nombre, email, apellido1, apellido2, dni, direccion, tipoUser
        FROM usuarios
        WHERE email = '$email' AND pass = '$pass'
        ";
        $this->get_results_from_query();
           
		if(count($this->rows) == 1){
			foreach ($this->rows[0] as $propiedad=>$valor){
				$this->$propiedad = $valor;
            }
        }
	}
	public function get($user_data=array()) {
		foreach ($user_data as $campo=>$valor){
            $$campo = $valor;
        }
        $this->query = "
        SELECT idC, nombre, email, apellido1, apellido2, dni, direccion, tipoUser
		FROM usuarios
		WHERE email = '$email'
		";
		$this->get_results_from_query();
        
		if(count($this->rows) == 1){
			foreach ($this->rows[0] as $propiedad=>$valor){
				$this->$propiedad = $valor;
            }
        }
	}
	public function set($user_data=array()) {
        
				foreach ($user_data as $campo=>$valor){
					$$campo = $valor;
                }
				$this->query = "
				INSERT INTO usuarios
				(nombre, email, pass, apellido1, apellido2, dni, direccion, tipoUser)
				VALUES
				('$nombre', '$email', '$pass', '$apellido1', '$apellido2', '$dni','$direccion', '$tipoUser')
				";
				$this->execute_single_query();
            
	
	}
	public function edit($user_data=array()) {
		foreach ($user_data as $campo=>$valor){
			$$campo = $valor;
        }
		$this->query = "
			UPDATE usuarios
			SET nombre='$nombre',
            email='$email',
			apellido1='$apellido1',
            apellido2='$apellido2',
			dni='$dni',
            direccion='$direccion',
            tipoUser='$tipoUser'
			WHERE email = '$email'
		";
		$this->execute_single_query();
		}
	public function delete($user_email='') {
		$this->query = "
		DELETE FROM usuarios
		WHERE email = '$user_email'
		";
		$this->execute_single_query();
	}
    
    public function getIdC(){
        return $this->idC;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getApellido1(){
        return $this->apellido1;
    }
    public function getApellido2(){
        return $this->apellido2;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTipoUser(){
        return $this->tipoUser;
    }
}
?>