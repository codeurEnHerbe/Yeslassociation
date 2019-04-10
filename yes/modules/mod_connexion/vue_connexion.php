<?php
Class Vue_Connexion{
   public function __construct () {
  
   }

   public function menu(){
   	// echo "<a href='index.php?module=joueur&action=bienvenue'>Bienvenue</a><br>";
    //   echo "<a href='index.php'>Retour Choix Modules</a><br/><br/>";
   }

   public function connexion(){
      echo  "<form method='post' action='index.php?module=connexion&action=connexionDB' id='connect'>
        <div id='formconnect'>
          <label id='connexionEmail'>E-mail</label> <input type='text' name='email'/><br/>
          <label id='connexionPassword'>Password</label> <input type='password' name='password'/><br/>
        </div>
        <input type='submit' value='Valider' /><br/>
      </form>";
   }
}
?>