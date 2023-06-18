<?php
require_once("DAO.php");
class affectation{
	private $id_affectation;
	private $departement;
	private $localisation;
    private $user;
    private $batiment;  
    private $etage;
    private $materiel;
	private $date;

	function __get($prop){
		switch ($prop) {
			case 'id_affectation': return $this->id_affectation;  break;
			case 'departement': return $this->departement;  break;
			case 'localisation': return $this->localisation;  break;
            case 'user': return $this->user;  break;
            case 'batiment': return $this->batiment;  break;
            case 'etage': return $this->etage;  break;
            case 'materiel': return $this->materiel;  break;
			case 'date': return $this->date;  break;
		}
	}
	function __construct($id_affectation,$departement,$localisation,$user,$batiment,$etage,$materiel,$date){
		    $this->id_affectation=$id_affectation;
			if($id_affectation==1){
				$this->id_affectation=1;
			}
		    $this->departement=$departement;
			$this->localisation=$localisation;
            $this->user=$user;
            $this->batiment=$batiment;
            $this->etage=$etage;
            $this->materiel=$materiel;
			$this->date=$date;
	}
	function save(){
		$dao=new DAO();
		$dao->ajouteraffectation($this->departement,$this->localisation,$this->user,$this->batiment,$this->etage,$this->materiel,$this->date);
	}
    static function listeA(){		
		$dao=new DAO();
		return $dao->listaffectation();
	}
	function updateaffectation(){
		$dao=new DAO();
		$dao->updateaffectation($this->id_affectation,$this->departement,$this->localisation,$this->user,$this->batiment,$this->etage,$this->materiel,$this->date);
	}
	static function getaffectation($id_affectation){		
		$dao=new DAO();
		return $dao->get_affectation($id_affectation);
	}
	static function SUPaffectation($id_affectation){		
		$dao=new DAO();
		return $dao->SUP_affectation($id_affectation);
	}
	static function listAffectation_departement($departement){		
		$dao=new DAO();
		return $dao->listAffectation_departement($departement);
	}
	static function listAffectation_localisation($localisation){		
		$dao=new DAO();
		return $dao->listAffectation_localisation($localisation);
	}
	static function listAffectation_date($date){		
		$dao=new DAO();
		return $dao->listAffectation_date($date);
	}
	static function listAffectation_user($user){		
		$dao=new DAO();
		return $dao->listAffectation_user($user);
	}
	
	static function listAffectation_materiel($materiel){		
		$dao=new DAO();
		return $dao->listAffectation_materiel($materiel);
	}
	static function listAffectation_etage($etage){		
		$dao=new DAO();
		return $dao->listAffectation_etage($etage);
	}
	static function listAffectation_batiment($batiment){		
		$dao=new DAO();
		return $dao->listAffectation_batiment($batiment);
	}
	static function get_allNaffectation(){		
		$dao=new DAO();
		return $dao->get_allNaffectation();
	}	
	static function Nuser($departement){		
		$dao=new DAO();
		return $dao->Nuser($departement);
	}
	static function Nmodel($departement,$mark){		
		$dao=new DAO();
		return $dao->Nmodel($departement,$mark);
	}
	
}
?>