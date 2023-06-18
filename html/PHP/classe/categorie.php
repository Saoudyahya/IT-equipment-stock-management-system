<?php
require_once("DAO.php");
class categorie{
	private $type;
	

	function __get($prop){
		switch ($prop) {
			case 'type': return $this->type;  break;
	
		}
	}
	function __construct($type){
		$this->type=$type;

	}
	function save(){
		$dao=new DAO();
		$dao->joutercategorie($this->type);
	}
    function updatecategorie($old_type){
		$dao=new DAO();
		$dao->updateCategorie($this->type,$old_type);
	}
	static function listeC(){		
		$dao=new DAO();
		return $dao->listCategorie();
	} 
	static function getall(){
		$dao=new DAO();
		return $dao->getallCategorie();
	}
	static function SUPcategorie($type){		
		$dao=new DAO();
		return $dao->SUP_categorie($type);
	}

}
?>