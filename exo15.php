<?php
//Créer une fonction PHP qui retourne vraie ou faux si un nombre qui lui est passé en paramètre est pair ou impair (respectivement). Vous pouvez tester tout cela facilement.

//Code à faire ici
$rand = rand(1,5000);
$txt = $rand."";
pair($rand);
function pair($rand){
    echo "nombre = ". $rand ."<br>";
    $bool_res = false;
    $pair = array(2,4,6,8,0);
    $txt = $rand."";
    $size = strlen($txt) - 1;
    $chiffre = str_split($txt,1)[$size];
    for($i = 0; $i < 5 ; $i++){
       echo "Etape : " . $i . " (" . $pair[$i] ." == " . $chiffre .") "; 
       if($pair[$i] == $chiffre) {echo "vrai ! Le nombre est pair.<br>"; $bool_res = true;return true;}
       echo "faux ! On doit continuer !<br>";
    }
    echo "Le nombre n'est pas pair ! ";
    return $bool_res;
}