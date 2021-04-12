<?php
$tableau = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

//Parcourez le tableau $tableau en affichant en PHP son indice puis la valeur associée, exemple : 0 => lundi

//Code à faire ici
/* test
$cmp = 0;
function res($n)
{
    echo $GLOBALS["cmp"]." => ".$n."<br>"; 
    $GLOBALS["cmp"]++;
}

array_map('res', $tableau);
*/

for($i = 0; $i < count($tableau); $i++){
    echo $i." => ".$tableau[$i]."<br>";
}