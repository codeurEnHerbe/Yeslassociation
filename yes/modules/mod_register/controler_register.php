<?php

include_once 'modules/mod_register/modele_register.php';
include_once 'modules/mod_register/vue_register.php';

Class Controleur_Register{
	private $vue;
	private $modele;

	public function __construct(){
		$this -> vue = new Vue_Register();
		$this -> modele = new Modele_Register();
	}

   public function register() {
      $this -> vue -> register();
      //header('Location: index.php');
   }

   public function registerDB(){
   		$this -> modele -> registerDB();
   }

}
?>