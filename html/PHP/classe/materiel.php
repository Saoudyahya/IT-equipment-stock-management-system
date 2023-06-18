<?php
require_once("DAO.php");
class Materiel{
	private $ser;
	private $type;
	private $mark;
    private $model;
    private $code_2m;

	function __get($prop){
		switch ($prop) {
			case 'ser': return $this->ser;  break;
			case 'type': return $this->type;  break;
			case 'mark': return $this->mark;  break;
            case 'model': return $this->model;  break;
            case 'code_2m': return $this->code_2m;  break;
		}
	}
	function __construct($ser,$type,$mark,$model,$code_2m){
		$this->ser=$ser;
		$this->type=$type;
			$this->mark=$mark;
            $this->model=$model;
            $this->code_2m=$code_2m;
	}
	function save(){
		$dao=new DAO();
		$dao->ajouterMateriel($this->ser,$this->type,$this->mark,$this->model,$this->code_2m);
	}
    static function listeM(){		
		$dao=new DAO();
		return $dao->listMateriel();
	}
	function updatemateriel($old_ser){
		$dao=new DAO();
		$dao->updateMateriel($this->ser,$this->type,$this->mark,$this->model,$this->code_2m,$old_ser);
	}
	static function getmateriel($ser){		
		$dao=new DAO();
		return $dao->get_materiel($ser);
	}
	static function get_allmateriel(){		
		$dao=new DAO();
		return $dao->get_allmateriel();
	}
	static function listMateriel_mark($mark){		
		$dao=new DAO();
		return $dao->listMateriel_mark($mark);
	}
	static function listMateriel_type($type){		
		$dao=new DAO();
		return $dao->listMateriel_type($type);
	}
	static function listMateriel_code_2m($code_2m){		
		$dao=new DAO();
		return $dao->listMateriel_code_2m($code_2m);
	}
	static function listMateriel_ser($ser){		
		$dao=new DAO();
		return $dao->listMateriel_ser($ser);
	}
	static function listMateriel_model($model){		
		$dao=new DAO();
		return $dao->listMateriel_model($model);
	}
	static function SUPmateriel($ser){		
		$dao=new DAO();
		return $dao->SUP_materiel($ser);
	}
	static function get_mark($ser){		
		$dao=new DAO();
		return $dao->get_mark($ser);
	}
	static function ifmodel($model){		
		$dao=new DAO();
		return $dao->ifmodel($model);
	}
	static function get_model($mark){		
		$dao=new DAO();
		return $dao->get_model($mark);
	}

	static function all_model(){		
		$dao=new DAO();
		return $dao->get_allmodel();
	}
	static function get_allNmateriel(){		
		$dao=new DAO();
		return $dao->get_allNmateriel();
	}
	static function ifmodelmark($mark,$model){		
		$dao=new DAO();
		return $dao->ifmodelmark($mark,$model);
	}
	

	
	

}
?>