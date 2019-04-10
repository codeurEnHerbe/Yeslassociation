<?php

include_once "modules/mod_register/controler_register.php";

class ModRegister {

	private $controleur;

	public function __construct () {
		$this -> controleur = new Controleur_Register();

		if(isset($_GET['action'])){
			$action = htmlspecialchars($_GET['action']);
		}else{
			$action = "bienvenue";
		}

		switch($action){
			case "bienvenue" :
				$this -> controleur -> register();
				break;

			case "registerDB" :
				$this -> controleur -> registerDB();

				break;
			case "deconnexion" :
				$this -> controleur -> deconnexion();	
				

		}
	}
	
}






?>