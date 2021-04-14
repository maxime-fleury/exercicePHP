<?php
$person1 = [
    "nom" => "Pierre",
    "age" => 18,
    "notes" => [10, 12, 15, 14, 18]
];

$person2 = [
    "nom" => "Paul",
    "age" => 17,
    "notes" => [15, 12, 13, 17, 8]
];

$person3 = [
    "nom" => "Jacques",
    "age" => 19,
    "notes" => [12, 20, 20, 17, 14]
];

//Créer une fonction qui permet d'afficher les informations (nom et âge) de chaques personnes et d'afficher l'ensemble de leur notes puis la moyenne de celle-ci

//Code à faire ici
function get_($pers){
    echo "Prénom: ".$pers["nom"]."<br>";
    echo "Âge: ".$pers["age"]."<br>";
    echo "Moyenne: ". moyenne($pers["notes"])."<br>";
}
get_($person1);
get_($person2);
get_($person3);
function moyenne($x){
    $res = 0;
    $cumul = 0;
    $nombre_de_nombre = count($x);
    
    for($i = 0; $i < $nombre_de_nombre;$i++){
        $cumul += $x[$i];
    }
    $res =  number_format($cumul/$nombre_de_nombre,2);
    return $res;
}