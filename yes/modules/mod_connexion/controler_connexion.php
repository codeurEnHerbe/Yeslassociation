<?php

include_once 'modules/mod_connexion/modele_connexion.php';
include_once 'modules/mod_connexion/vue_connexion.php';

Class Controleur_Connexion{
	private $vue;
	private $modele;

	public function __construct(){
		$this -> vue = new Vue_Connexion();
		$this -> modele = new Modele_Connexion();
	}

   public function connexion() {
      $this -> vue -> connexion();
      //header('Location: index.php');
   }

   public function connexionDB(){
   	$this -> modele -> connexionDB();
   }

}
?>