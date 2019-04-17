<?php
Class Vue_Search{
  public function __construct () {
  
  }

  public function showSearch($matrice){

    for ($i = 0; $i < count($matrice); $i++) {
        echo  "<h2>".$matrice[$i][0]."</h2>";
        for ($j = 1; $j < count($matrice[$i]); $j++) {
          echo  "<label>".$matrice[$i][$j]."</label><input type='checkbox'/><br/>";
        }
    }
     /* echo  "<form method='post' action='index.php?module=search&action=validSearch' id='connect'>
        <label>Bio-Diversité</label><input type='checkbox'/><br/>
        <label>Climat</label><input type='checkbox'/><br/>
        <label>Energies</label><input type='checkbox'/><br/>
        <label>Habitat</label><input type='checkbox'/><br/>
        <label>Pollution</label><input type='checkbox'/><br/>
      </form>";*/
  }
}
?>