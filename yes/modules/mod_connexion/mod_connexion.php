<?php

include_once "modules/mod_connexion/controler_connexion.php";

class ModConnexion {

	private $controleur;

	public function __construct () {
		$this -> controleur = new Controleur_Connexion();

		if(isset($_GET['action'])){
			$action = htmlspecialchars($_GET['action']);
		}else{
			$action = "welcome";
		}

		switch($action){
			case "welcome" :
				$this -> controleur -> connexion();
				break;

			case "connexionDB" :
				$this -> controleur -> connexionDB();

				break;
			case "deconnexion" :
				$this -> controleur -> deconnexion();	
				

		}
	}
	
}






?>