<?php
include_once 'bdd.php';

Class Modele_Register extends BDD{

	public function __construct(){
	}

	public function initConnexion(){
	//	$this ->connexion();
	}
//insert into users(email, name, created_at, updated_at) values('email', 'name', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);
	public function verifDB(){	
		$req = pg_query(self::$DBH,"select * from users where email='".$_POST['mail']."'");
		if(pg_num_rows($req) == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function registerDB(){
		if ((isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['fonction']) && isset($_POST['mdp']) && isset($_POST['mdpconf'])
		&& isset($_POST['organisationname']) && isset($_POST['typeorganisation'])&& isset($_POST['adress'])
		&& isset($_POST['postalcode']) && isset($_POST['town'])) && $_POST['mdpconf'] == $_POST['mdp']) {

			if(self::verifDB()){
				echo "Un compte associé à cet e-mail existe déjà.";
			}else{
				$password = crypt($_POST['mdp'], "hashfacile");

				$req = pg_query(self::$DBH, "insert into users(email, name, created_at, updated_at, first_name, type_organisation, password, fonction_user, adresse, ville, postal) 
				values('".$_POST['mail']."', '".$_POST['lastname']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '".$_POST['firstname']."', '".$_POST['typeorganisation']."', '".$password."', '".$_POST['fonction']."', '".$_POST['adress']."', '".$_POST['town']."', '".$_POST['postalcode']."');");

				/*if ($req == true) {
					$req1 = self::$DBH -> prepare ("select idUtilisateur from Identification where adresseMail=?");

					$req1 -> execute(array($username));
					$test1 = $req1 -> fetch();

					$_SESSION['login'] = $test1['idUtilisateur'];
				}else{
					echo "Erreur login déja utilisé";
				}*/
			}

		}else{
			echo "Veuillez verifier les champs";
		}
	}

}
?>