<?php
Class BDD{
	protected static $bdd;
	public static $DBH;

	public static function connexion(){
		// $option = array(
  //           'unix_socket' => '/var/run/mysqld/mysqld.sock',
  //       );

		try {
			self::$DBH = pg_connect("host=localhost port= dbname= user= password="");
 		} catch (PDOException $e) {
   			echo 'Connexion échouée : ' . $e->getMessage();
		}
		
	}
}
?>
