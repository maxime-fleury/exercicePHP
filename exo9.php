<?php
//Créer un tableau classique comme en JS, qui contient les noms des personnes sur votre ilôt.

//Code à faire ici
$tab_illo = array( 0 => "Alex" ,1 => "Maxime", 2 => "Quentin", 3 => "Claire");
for($i = 0; $i < 4; $i++)
    echo $tab_illo[$i] ." est la " . $i . "ème personne sur l'ilôt.<br>"; 
