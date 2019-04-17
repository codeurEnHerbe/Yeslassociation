<?php
include_once 'bdd.php';

Class Modele_Search extends BDD{

	public function __construct(){
	}

	public function getCategories(){
		$categories = pg_query(self::$DBH, "select * from categories;");
		
		$matrice = array();
		$i=0;
		while ($row = pg_fetch_row($categories)) {
			$matrice[$i] = array($row[1]);
			$subCategories = pg_query(self::$DBH, "select name from sub_categories where idcategorie=".$row[0].";");
		  	while ($rowSub = pg_fetch_row($subCategories)) {
		  		array_push($matrice[$i], $rowSub[0]);
		  	}
		$i++;
		}
		return $matrice;
	}
}
?>