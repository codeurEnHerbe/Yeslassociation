<?php
Class Vue_Search{
   public function __construct () {
  
   }

   public function showSearch(){
   	/*
   		VOIR TABLEAU STATIC POUR ADAPTATION
   	*/
      echo  "<form method='post' action='index.php?module=search&action=validSearch' id='connect'>
        <label>Bio-Diversité</label><input type='checkbox'/><br/>
        <label>Climat</label><input type='checkbox'/><br/>
        <label>Energies</label><input type='checkbox'/><br/>
        <label>Habitat</label><input type='checkbox'/><br/>
        <label>Pollution</label><input type='checkbox'/><br/>
      </form>";
   }
}
?>