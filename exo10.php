<?php
//Créer tableau associatif des personnes présentes sur votre îlot. Utilisez pour les clés "person1", "perosn2",...

//Code à faire ici
$tab_illo = array( "person0" => "Alex" ,"person1" => "Maxime", "person2" => "Quentin", "person3" => "Claire");
for($i = 0; $i < 4; $i++)
    echo $tab_illo["person".$i] ." est la " . $i . "ème personne sur l'ilôt.<br>"; 
