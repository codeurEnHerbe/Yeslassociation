<?php

include_once "modules/mod_search/controler_search.php";

class ModSearch {

	private $controleur;

	public function __construct () {
		$this -> controleur = new Controleur_Search();

		if(isset($_GET['action'])){
			$action = htmlspecialchars($_GET['action']);
		}else{
			$action = "welcome";
		}

		switch($action){
			case "welcome" :
				$this -> controleur -> showSearch();
				break;		
		}
	}
}
?>