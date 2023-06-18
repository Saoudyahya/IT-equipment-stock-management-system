<?php
 class DAO {
    function getPDO(){
		return new PDO("mysql:host=localhost;dbname=2m","root","");
	}
    function ajouterMateriel($ser,$type,$mark,$model,$code_2m){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into Materiel (type,mark,model,ser,code_2m) Values (?,?,?,?,?);");
		$res->execute(array($type,$mark,$model,$ser,$code_2m));
	}
    function ajouterUser($id_user,$name,$departement){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into user (name,departement) Values (?,?);");
		$res->execute(array($name,$departement));
	}
 	
    function ajouterDepartement($name){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into departement (name) Values (?);");
		$res->execute(array($name));
	}
	function joutercategorie($type){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into categorie (type) Values (?);");
		$res->execute(array($type));
	}
	function ajouterAdmin($username,$password,$type){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into admin (username,password,type) Values (?,?,?);");
		$res->execute(array($username,$password,$type));
	}
	function ajouteraffectation($departement,$localisation,$user,$batiment,$etage,$materiel,$date){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("insert into affectation (departement,localisation,user,batiment,etage,materiel,date) Values (?,?,?,?,?,?,?);");
		$res->execute(array($departement,$localisation,$user,$batiment,$etage,$materiel,$date));
	}



    function listMateriel(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	}
  
    function listMateriel_mark($mark){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where mark=?;");
		$res->execute(array($mark));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	} 
	function listMateriel_type($type){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where type=?;");
		$res->execute(array($type));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	} 
	function listMateriel_code_2m($code_2m){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where code_2m=?;");
		$res->execute(array($code_2m));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	}
	function listMateriel_ser($ser){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where ser=?;");
		$res->execute(array($ser));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	} 
	function listMateriel_model($model){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where model=?;");
		$res->execute(array($model));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
		return $lst;
	} 
	function listUsers_departement($departement){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM user where departement=?;");
		$res->execute(array($departement));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new user($ligne["id_user"],$ligne["name"],$ligne["departement"]);
		}
		return $lst;
	} 
	function listUsers_name($name){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM user where name=?;");
		$res->execute(array($name));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new user($ligne["id_user"],$ligne["name"],$ligne["departement"]);
		}
		return $lst;
	} 
	function  listAdmins_username($username){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM admin where username=?;");
		$res->execute(array($username));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new admin($ligne["username"],$ligne["password"],$ligne["type"]);
		}
		return $lst;
	} 
	function  listAdmins_type($type){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM admin where type=?;");
		$res->execute(array($type));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new admin($ligne["username"],$ligne["password"],$ligne["type"]);
		}
		return $lst;
	} 
	function listAffectation_departement($departement){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where departement=?;");
		$res->execute(array($departement));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	function listAffectation_localisation($localisation){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where localisation=?;");
		$res->execute(array($localisation));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	
	function listAffectation_date($date){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where date=?;");
		$res->execute(array($date));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	function listAffectation_user($user){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where user=?;");
		$res->execute(array($user));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	function listAffectation_batiment($batiment){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where batiment=?;");
		$res->execute(array($batiment));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	function listAffectation_materiel($materiel){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where materiel=?;");
		$res->execute(array($materiel));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 
	
	function listAffectation_etage($etage){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation where etage=?;");
		$res->execute(array($etage));
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	} 



	function listAffectation(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM affectation ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
		}
		return $lst;
	}

    
    function listeUsers(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM user ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new user($ligne["id_user"],$ligne["name"],$ligne["departement"]);
		}
		return $lst;
	}
    
	function listeAdmins(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM admin ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new admin($ligne["username"],$ligne["password"],$ligne["type"]);
		}
		return $lst;
	}
	function listDepartement(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM Departement ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new Departement($ligne["name"]);
		}
		return $lst;
	}
	function listCategorie(){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM categorie ;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new categorie($ligne["type"]);
		}
		return $lst;
	}


	function signin($user,$password){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM admin  where username='$user' and password='$password';");
		$res->execute();
		if($res->fetch()) return true;
		return false;
	} 	
	function ifmodelmark($mark,$model){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel  where mark='$mark' && model='$model' ;");
		$res->execute();
		if($res->fetch()) return true;
		return false;
	} 	


	function getallCategorie(){
	    $pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * from categorie ;");
		$res->execute(array());
		return $res->fetchALL();

   }
   function get_alluser(){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT name FROM user ;");
	$res->execute(array());
	return $res->fetchALL();
	
} 
function get_allmateriel(){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT ser FROM materiel ;");
	$res->execute(array());
	return $res->fetchALL();
	
}
function get_allNmateriel(){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT count(ser) FROM materiel ;");
	$res->execute(array());
	return $res->fetch();
	
}
function get_allNaffectation(){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT count(id_affectation) FROM affectation ;");
	$res->execute(array());
	return $res->fetch();
	
}
function Nuser($departement){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT user FROM affectation where departement='$departement' ;");
	$res->execute(array());
	return $res->fetchALL();
	
}
function Nmodel($departement,$mark){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT count(model) FROM materiel where mark='$mark' and ser in (SELECT materiel from affectation where departement='$departement');");
	$res->execute(array());
	return $res->fetch();
	
}
 function get_mark($ser){		
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT mark FROM materiel  where ser=?;");
	$res->execute(array($ser));
	return $res->fetch();
}
function get_model($mark){		
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT model FROM materiel  where mark=?;");
	$res->execute(array($mark));
	return $res->fetch();
}
function get_allmodel(){		
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT count(model) FROM materiel ;");
	$res->execute(array());
	return $res->fetch();
}

   function getallDepartement(){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT * from departement ;");
	$res->execute(array());
	return $res->fetchALL();

}
    function get_user($id){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT * FROM user where id_user=?;");
	$res->execute(array($id));

	if($ligne=$res->fetch()){
		return new user($ligne["id_user"],$ligne["name"],$ligne["departement"]);
	}
	}
	function get_materiel($id){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("SELECT * FROM materiel where ser=?;");
		$res->execute(array($id));
	
		if($ligne=$res->fetch()){
			return new materiel($ligne["ser"],$ligne["type"],$ligne["mark"],$ligne["model"],$ligne["code_2m"]);
		}
	    return null;
} 
function get_affectation($id){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT * FROM affectation where id_affectation=?;");
	$res->execute(array($id));

	if($ligne=$res->fetch()){
		return new affectation($ligne["id_affectation"],$ligne["departement"],$ligne["localisation"],$ligne["user"],$ligne["batiment"],$ligne["etage"],$ligne["materiel"],$ligne["date"]);
	}
	return null;
} 

function get_admin($id){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT * FROM admin where username=?;");
	$res->execute(array($id));

	if($ligne=$res->fetch()){
		return new admin($ligne["username"],$ligne["password"],$ligne["type"]);
	}
	return null;
} 
function get_Duser($departement){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("SELECT * FROM user where departement=?;");
	$res->execute(array($departement));
	return $res->fetchALL();
	
} 

  function updateUser($id_user,$name,$departement){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update user SET name=?,departement=? where id_user=?; ");
	$res->execute(array($name,$departement,$id_user));
}

function updateMateriel($ser,$type,$mark,$model,$code_2m,$old_ser){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update materiel SET ser=?,type=?,mark=?,model=?,code_2m=? where ser=?;");
	$res->execute(array($ser,$type,$mark,$model,$code_2m,$old_ser));
}
function updateDepartement($new_name,$old_name){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update departement SET name=? where name=?;");
	$res->execute(array($new_name,$old_name));
}

function updateaffectation($id_affectation,$departement,$localisation,$user,$batiment,$etage,$materiel,$date){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update affectation SET departement=?,localisation=?,user=?,batiment=?,etage=?,materiel=?,date=? where id_affectation=?;");
	$res->execute(array($departement,$localisation,$user,$batiment,$etage,$materiel,$date,$id_affectation));
}
function updateCategorie($new_type,$old_type){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update categorie SET type=? where type=?;");
	$res->execute(array($new_type,$old_type));
}
function updateAdmin($username,$password,$type,$old_username){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("update admin SET username=?,password=?,type=? where username=?;");
	$res->execute(array($username,$password,$type,$old_username));
}

function SUP_user($id_user){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM user where id_user='$id_user';");
	$res->execute();

}
function SUP_materiel($ser){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM materiel where ser='$ser';");
	$res->execute();

}
function SUP_affectation($id_affectation){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM affectation where id_affectation='$id_affectation';");
	$res->execute();

}
function SUP_categorie($type){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM categorie where type='$type';");
	$res->execute();

}
function SUP_departement($name){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM departement where name='$name';");
	$res->execute();

}
function SUP_admin($username){
	$pdo=$this->getPDO();
	$res=$pdo->prepare("DELETE  FROM admin where username='$username';");
	$res->execute();

}
 
}





?>