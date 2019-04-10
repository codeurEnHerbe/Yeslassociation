<?php
include_once 'bdd.php';

Class Modele_Connexion extends BDD{

	public function __construct(){
	}

	public function initConnexion(){
	//	$this ->connexion();
	}
//insert into users(email, name, created_at, updated_at) values('email', 'name', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

	public function connexionDB(){
		if (isset($_POST['email']) && isset($_POST['password'])) {

			$password = crypt($_POST['password'], "hashfacile");

			$req = pg_query(self::$DBH, "select * from users where email='".$_POST['email']."' AND password='".$password."';");

			if(pg_num_rows($req) != 1) {
			  echo "E-mail ou mot de passe éronné";
			}else{
				echo "Connecté";
			}

			/*if ($req == true) {
				$req1 = self::$DBH -> prepare ("select idUtilisateur from Identification where adresseMail=?");

				$req1 -> execute(array($username));
				$test1 = $req1 -> fetch();

				$_SESSION['login'] = $test1['idUtilisateur'];
			}else{
				echo "Erreur login déja utilisé";
			}*/
		}else{
			echo "Veuillez verifier les champs";
		}
	}

}
?>