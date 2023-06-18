<?php
require_once("DAO.php");
class departement{
	private $name;
	

	function __get($prop){
		switch ($prop) {
			case 'name': return $this->name;  break;
	
		}
	}
	function __construct($name){
		$this->name=$name;

	}
	function save(){
		$dao=new DAO();
		$dao->ajouterDepartement($this->name);
	}

	static function listeD(){		
		$dao=new DAO();
		return $dao->listDepartement();
	} 
	function updatedepartement($old_name){
		$dao=new DAO();
		$dao->updateDepartement($this->name,$old_name);
	}
	static function getall(){
		$dao=new DAO();
		return $dao->getallDepartement();
	}
	static function SUPdepartement($name){		
		$dao=new DAO();
		return $dao->SUP_departement($name);
	}

	

}
?>