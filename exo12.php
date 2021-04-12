<?php
//Créer une variable qui contient un nombre aléatoire entre 5 et 20. Puis affichez dans différents paragraphes le résultat de l'addition cumulé du chiffre obtenu avec les entiers qui le précède (sauf 0) ; exemple :
/* Si vous obtenez 5, je veux :
1 : résultat = 5 (5+0)
2 : résultat = 9 (5+4)
3 : résultat = 12 (9+3)
4 : résultat = 14 (12+2)
5 : résultat = 15 (14+1)
*/

//Code à faire ici

$random = rand(5,20);
$random_tmp = $random;//aléatoire dans variable temp
$randcumul = 0;//resultat cumulé
$random_res = 0;//resulat à chaque ligne

echo "0" ." : Résultat = " . $random . " (" . $random . "+0" . ")<br>"; //premier resultat

$randcumul = $random;//le cumulé = premier res


for($i = 1; $i <= $random; $i++){
    $random_tmp = $random - $i;//seconde valeur
    $random_res = $randcumul + $random_tmp;//resultat
    echo $i ." : Résultat = " . $random_res . " (" . $randcumul . "+" . ($random_tmp) . ")<br>"; 
    $randcumul += $random_tmp;//ajout du cumul
}

/*
for($rand_tmp = $random; ){
    $randcumul += $rand_tmp; 
    
    $tmp++;
}*/