<?php
require_once('db_abstract_model.php');
class Cliente extends DBAbstractModel {
    public $idC;
	public $email;
	public $nombre;
	public $apellido1;
    public $apellido2;
	private $dni;
	protected $id;
	function __construct($idBici,$modelo,$descrip,$peso,$pvp,$foto,$idC) {
		$this->idBici=$idBici;
        $this->modelo=$modelo;
        $this->descrip=$descrip;
        $this->peso=$peso;
        $this->pvp=$pvp;
        $this->foto=$foto;
        $this->idC=$idC;   
	}
	public function get($user_email='') {
		if($user_email != ''):
			$this->query = "
			SELECT id, nombre, apellido, email, clave
			FROM usuarios
			WHERE email = '$user_email'
			";
			$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
			foreach ($this->rows[0] as $propiedad=>$valor):
				$this->$propiedad = $valor;
			endforeach;
		endif;
	}
	public function set($user_data=array()) {
		if(array_key_exists('email', $user_data)):
			$this->get($user_data['email']); //leemos el usuario por si existe, no crearlo de nuevo
			//echo "- user:". $user_data['email']. " this: ". $this->email."-<br>";
			if($user_data['email'] != $this->email): //evita repetir la llave principal
				foreach ($user_data as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
				INSERT INTO usuarios
				(nombre, apellido, email, clave)
				VALUES
				('$nombre', '$apellido', '$email', '$clave')
				";
				$this->execute_single_query();
			endif;
			
		endif;
	}
	public function edit($user_data=array()) {
		foreach ($user_data as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->query = "
			UPDATE usuarios
			SET nombre='$nombre',
			apellido='$apellido',
			clave='$clave'
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
		unset($this);
	}
}
?>