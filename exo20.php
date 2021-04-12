<?php
$weirdArray = [
    ["prenom" => "Justine"], 
    "chat",
    ["prenom" => "Julien"], 
    "chien",
    ["prenom" => "Damien"], 
    "poisson"
];

//Voici un tableau particulier, je veux que vous le parcouriez et que vous
// m'affichiez la paire clé/valeur si l'élément du tableau est un tableau associatif, sinon juste la valeur de l'élément.

//Code à faire ici
function readWierdArray($a){
    $cmp = count($a);//taille du tableau;
    for($i = 0; $i < $cmp; $i++){
        if(is_array($a[$i])){
            foreach($a[$i] as $key => $item) {
                echo '('.$key.') => ('.$item.')';
            }
        }
        else echo $a[$i];
        echo "<br>";
    }
}
readWierdArray($weirdArray);