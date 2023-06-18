<?php  
require_once('DAO.php');
class admin{
	private $username;
	private $password;
	private $type;
   

	function __get($prop){
		switch ($prop) {
			case 'username': return $this->username;  break;
			case 'password': return $this->password;  break;
			case 'type': return $this->type;  break;
		}
	}
	function __construct($username,$password,$type){
		$this->username=$username;
		$this->password=$password;
			$this->type=$type;

	}
	function save(){
		$dao=new DAO();
		$dao->ajouterAdmin($this->username,$this->password,$this->type);
	}
	static function listeU(){		
		$dao=new DAO();
		return $dao->listAdmin();
	}
    static function signin($username,$password){
		$dao=new DAO();
		if($dao->signin($username,$password)) return true;
		return false;
	}
	static function listeA(){		
		$dao=new DAO();
		return $dao->listeAdmins();
	}
	static function getadmin($username){		
		$dao=new DAO();
		return $dao->get_admin($username);
	}
	function updateadmin($old_username){
		$dao=new DAO();
		$dao->updateAdmin($this->username,$this->password,$this->type,$old_username);
	}
	static function SUPadmin($username){		
		$dao=new DAO();
		return $dao->SUP_admin($username);
	}
	static function listAdmins_username($username){		
		$dao=new DAO();
		return $dao->listAdmins_username($username);
	}
	static function listAdmins_type($type){		
		$dao=new DAO();
		return $dao->listAdmins_type($type);
	}
	

}
?>
