<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];
$notes3 = [6, 6, 17, 14, 13, 12];

$allnotes = [$notes1, $notes2, $notes3];

//Créer une fonction qui donne la moyenne de chacun des groupes de notes. Cette fonction prendra en paramètre un tableau, 
//vous devrez donc passez chaque index du tableau $allnotes (càd l'appeller 3 fois pour obtenir les 3 moyennes, puis les affichez).

//Code à faire ici
function moyenne($x){
    $res = 0;
    $cumul = 0;
    $nombre_de_nombre = count($x);
    
    for($i = 0; $i < $nombre_de_nombre;$i++){
        echo "<br>".$x[$i]." + ".$cumul;
        $cumul += $x[$i];
        echo " = ".$cumul."<br>";
    }
    $res =  number_format($cumul/$nombre_de_nombre,2);
    echo "moyenne =". $cumul . "/". $nombre_de_nombre . " = " . $res;
    return $res;
}

function multi_moy($tab,$cmp){
    $res = 0;
    for($i = 0; $i < $cmp;$i++){
       $res += moyenne($tab[$i]);
        
    }
    return number_format($res/$cmp,2);
}

echo "<br>Moyenne tot :" . multi_moy($allnotes, count($allnotes));