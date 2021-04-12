<?php
//Générer un nombre aléatoire entre 1 et 100, si celui-ci est inférieur à 75 affichez la valeur du nombre aléatoire et un compteur d'essais de nombre jusqu'à ce que le nombre aléatoire soit supérieur strictement à 75 ! (Utilisez une boucle ! Mais quelle boucle prendre lorsque que l'on ne sait pas le nombre d'itération nécessaire ?)

//Code à faire ici
$rand = rand(1,100);
$cmp = 0;

while($rand < 75){
    echo "Essay : ". $cmp . " rand ". $rand . (($rand <75)? " inférieur ":" supérieur ")."75 <br>";
    $rand = rand(1,100);
    $cmp++;
}
echo "Essay : ". $cmp . " rand ". $rand .  (($rand <75)? " inférieur ":" supérieur ")."75 <br>";