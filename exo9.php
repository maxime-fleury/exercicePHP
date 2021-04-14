<?php
//Créer un tableau classique comme en JS, qui contient les noms des personnes sur votre ilôt.

//Code à faire ici
$tab_illo = array( 0 => "Alex" ,1 => "Maxime", 2 => "Quentin", 3 => "Claire");
for($i = 0; $i < count($tab_illo); $i++)
    echo $tab_illo[$i] . " est la " . ($i+1) . " ème personne sur l'ilôt.<br>"; 

/*
echo "<pre>";
var_dump($tab_illo);
echo "</pre>";
*/