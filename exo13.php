<?php
//Vous devez créer une variable qui contient un nombre aléatroire entre 1 et 12. Ce nombre correspondra à un mois (1 = janvier, 2 = février, etc...). Puis affichez le nombre aléatoire et le mois associé à celui-ci (utilisez un switch !).

//Code à faire ici
$i = rand(1,12);

$txt1 = "Mois : ".$i." ";
switch($i){
    case 1 : $txt = "Janvier.";break;
    case 2 : $txt = "Février.";break;
    case 3 : $txt = "Mars.";break;
    case 4 : $txt = "Avril.";break;
    case 5 : $txt = "Mai.";break;
    case 6 : $txt = "Juin.";break;
    case 7 : $txt = "Juillet.";break;
    case 8 : $txt = "Août.";break;
    case 9 : $txt = "Septembre.";break;
    case 10 : $txt = "Octobre.";break;
    case 11 : $txt = "Novembre.";break;
    case 12 : $txt = "Décembre.";break;
}
echo $txt1.$txt;