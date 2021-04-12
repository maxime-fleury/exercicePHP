<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];

//Vous avez à votre disposition 2 tableaux. Afffichez la moyenne des 2 tableaux !

//Code à faire ici !
function moyenne($x){
    $res = 0;
    $cumul = 0;
    $nombre_de_nombre = count($x);
    
    for($i = 0; $i < $nombre_de_nombre;$i++){
        echo "<br>".$x[$i]." + ".$cumul;
        $cumul += $x[$i];
        echo " = ".$cumul."<br>";
    }
    $res =  $cumul/$nombre_de_nombre;
    echo "moyenne =". $cumul . "/". $nombre_de_nombre . " = " . $res;
    return $res;
}

$q = moyenne($notes1);
$f = moyenne($notes2);

$notes_tot = array($q, $f);
moyenne($notes_tot);