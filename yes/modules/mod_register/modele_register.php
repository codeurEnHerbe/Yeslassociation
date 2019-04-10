<?php
include_once 'bdd.php';

Class Modele_Register extends BDD{

	public function __construct(){
	}

	public function initConnexion(){
	//	$this ->connexion();
	}
//insert into users(email, name, created_at, updated_at) values('email', 'name', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

	public function registerDB(){
		if ((isset($_POST['id']) && isset($_POST['mdp'])) && $_POST['mdpconf'] == $_POST['mdp']) {

			$username = $_POST['id'];
			$password = crypt($_POST['mdp'], "hashefacile");

			$req = pg_query(self::$DBH, "insert into users(email, name, created_at, updated_at, password) values('".$_POST['id']."', 'name2', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,'".$password."');");

			$req = pg_query(self::$DBH,"select * from users where email='".$_POST['id']."';");

			while ($row = pg_fetch_row($req)) {
			  echo "email: $row[1]  password: $row[7]";
			  echo "<br />\n";
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