<?php
$array = ["b" => 7, "d" => 8, "a" => 56, "g" => 78, "f" => 23, "h" => 1, "j" => 74, "i" => 2, "e" => 3, "c" => 56];
$arraycopy =  (array) $array;

//Trouver les fonctions PHP pour : 
//Xtrier ce tableau dans l'ordre croissant des valeurs (tout en conservant les clés), 
//Xtrier dans l'ordre croissant des clés, 
//Xtrier dans l'ordre décroissant des valeurs (tout en conservant les clés), 
//X trier dans l'ordre décroissant des valeurs et enfin inverser l'ordre de ce tableau. 
//-Vérifier tout cela en débuggant vos variables. Attention, lisez bien la doc ou vous risquez d'avoir des surprises ! 
//- N'hésitez pas à copier le tableau $array dans d'autres variables si cela vous aide

//Code à faire ici

asort($arraycopy);
echo "sort garder les clé asort :<br>";
foreach ($arraycopy as $key => $val) {
    echo "array[" . $key . "] = " . $val . "\n";
}
echo "<br>sort par clé : ksort:<br>";
$arraycopy =  (array) $array;
ksort($arraycopy);
foreach ($arraycopy as $key => $val) {
    echo "array[" . $key . "] = " . $val . "\n";
}
$arraycopy =  (array) $array;
arsort($arraycopy);
echo "<br>sort garder les cle inversé arsort<br>";
foreach ($arraycopy as $key => $val) {
    echo "array[" . $key . "] = " . $val . "\n";
}
$arraycopy =  (array) $array;
rsort($arraycopy);
echo "<br>sort inversé rsort<br>";
foreach ($arraycopy as $key => $val) {
    echo "array[" . $key . "] = " . $val . "\n";
}
$arraycopy = array_reverse($arraycopy);
echo "<br>array_reverse() : inverse un tableau<br>";
foreach ($arraycopy as $key => $val) {
    echo "array[" . $key . "] = " . $val . "\n";
}
