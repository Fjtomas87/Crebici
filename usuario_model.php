<?php
require_once('db_abstract_model.php');
class Usuario extends DBAbstractModel {
    public $idC;
	public $email;
	public $nombre;
	public $apellido1;
    public $apellido2;
	public $dni;
    public $tipoUser;
    function __construct($idC,$nombre,$email,$apellido1,$apellido2,$dni,$tipoUser) {
		$this->idC=$idC;
        $this->nombre=$nombre;
        $this->email=$email;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->dni=$dni;
        $this->tipoUser=$tipoUser;   
	}
	public function get($user_email='') {
		if($user_email != ''){
			$this->query = "
			SELEC idC, nombre, email, apellido1, apellido2, dni, tipoUser
			FROM usuarios
			WHERE email = '$user_email'
			";
			$this->get_results_from_query();
        }
		if(count($this->rows) == 1){
			foreach ($this->rows[0] as $propiedad=>$valor){
				$this->$propiedad = $valor;
            }
        }
	}
	public function set($user_data=array()) {
		if(array_key_exists('email', $user_data)){
			$this->get($user_data['email']); //leemos el usuario por si existe, no crearlo de nuevo
			//echo "- user:". $user_data['email']. " this: ". $this->email."-<br>";
			if($user_data['email'] != $this->email){ 
				foreach ($user_data as $campo=>$valor){
					$$campo = $valor;
                }
				$this->query = "
				INSERT INTO usuarios
				(nombre, email, apellido1, apellido2, dni, tipoUser)
				VALUES
				('$nombre', '$email', '$apellido1', '$apellido2', '$dni', '$tipoUser')
				";
				$this->execute_single_query();
            }
			
        }
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
	function __destruct() {
		//unset($this);
	}
}
?>