<?php
include_once 'modules/mod_search/modele_search.php';
include_once 'modules/mod_search/vue_search.php';

Class Controleur_Search{
	private $vue;
	private $modele;

	public function __construct(){
		$this -> vue = new Vue_Search();
		$this -> modele = new Modele_Search();
	}

   public function showSearch() {
      $this -> vue -> showSearch($this -> modele -> getCategories());
      //header('Location: index.php');
   }
}
?>