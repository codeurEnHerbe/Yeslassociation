<?php
Class Vue_Register{
   public function __construct () {
  
   }

   public function menu(){
   	// echo "<a href='index.php?module=joueur&action=bienvenue'>Bienvenue</a><br>";
    //   echo "<a href='index.php'>Retour Choix Modules</a><br/><br/>";
   }

   public function register(){
      echo  "<form method='post' action='index.php?module=register&action=registerDB' id='connect'>
               <div id='formconnect'>
               <label>
                  Sur vous :
               </label>
                 <label id='registerName'>Nom</label> <input type='text' name='lastname'/><br/>
                 <label id='registerFirstname'>Prénom</label> <input type='text' name='firstname'/><br/>
                 <label id='registerMail'>Adresse Mail</label> <input type='text' name='mail'/><br/>
                 <label id='registerMdp'>Mot de passe</label> <input type='password' name='mdp'/> <br/>
                 <label id='id'>Confirmer Mot de passe</label> <input type='password' name='Mdpconf'/> <br/>
                <label>
                  Sur votre organisation :
                </label>
                  <label id='registerName'>Nom de l'organisation</label> <input type='text' name='lastname'/><br/>

                 <input type='submit' value='Valider' class='btn btn_outline_primary'/><br/>
               </div>
            </form>";
   }
}
?>