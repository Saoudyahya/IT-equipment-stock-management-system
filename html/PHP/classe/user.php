<?php  
require_once('DAO.php');
class user{
	private $id_user;
	private $name;
	private $departement;
   

	function __get($prop){
		switch ($prop) {
			case 'id_user': return $this->id_user;  break;
			case 'name': return $this->name;  break;
			case 'departement': return $this->departement;  break;
		}
	}
	function __construct($id,$name,$departement){
			$this->id_user=$id;
			if($id==1){
				$this->id_user=1;
			}
		$this->name=$name;
			$this->departement=$departement;

	}
	
	function save(){
		$dao=new DAO();
		$dao->ajouterUser($this->id_user,$this->name,$this->departement);
	}
	static function listeU(){		
		$dao=new DAO();
		return $dao->listeUsers();
	}
	function updateuser(){
		$dao=new DAO();
		$dao->updateUser($this->id_user,$this->name,$this->departement);
	}
	static function SUPuser($id_user){		
		$dao=new DAO();
		return $dao->SUP_user($id_user);
	}
	static function getUser($id_user){		
		$dao=new DAO();
		return $dao->get_user($id_user);
	}
	static function getDUser($departement){		
		$dao=new DAO();
		return $dao->get_Duser($departement);
	}
	static function get_alluser(){		
		$dao=new DAO();
		return $dao->get_alluser();
	}
	static function listUsers_departement($departement){		
		$dao=new DAO();
		return $dao->listUsers_departement($departement);
	}
	static function listUsers_name($name){		
		$dao=new DAO();
		return $dao->listUsers_name($name);
	}
	

}
?>
