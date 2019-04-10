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
          <label id='registerMail'>Adresse Mail</label> <input type='email' name='mail'/><br/>
          <label id='registerFonction'>Votre fonction dans l'organisation</label><input type='text' name='fonction'/><br/>
          <label id='registerMdp'>Mot de passe</label> <input type='password' name='mdp'/> <br/>
          <label id='registerMdpconf'>Confirmer Mot de passe</label> <input type='password' name='mdpconf'/> <br/>

          <label>
            Sur votre organisation :
          </label><br/>
          <label id='registerOrganisationname'>Nom de l'organisation</label> <input type='text' name='organisationname'/><br/>
          <label id='registerOrganisationtype'>Type d'organisation</label>
          <SELECT name='typeorganisation' size='1'>
            <OPTION>Association
            <OPTION>Entreprise sociale
            <OPTION>Fondation
            <OPTION>Collectivité
            <OPTION>locale/territoriale
          </SELECT><br/>
          <label id='registerAdress'>Adresse (facturation)</label> <input type='text' name='adress'/> <br/>
          <label id='registerPostal'>Code postal</label> <input type='text' name='postalcode'/> <br/>
          <label id='registerTown'>Ville</label> <input type='text' name='town'/> <br/>
          <input type='submit' value='Valider' class='btn btn_outline_primary'/><br/>
        </div>
      </form>";
   }
}
?>