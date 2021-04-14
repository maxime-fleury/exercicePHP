<?php
/*
$a = 1;
function test()
{ 
    echo $a;
}

test();

//Trouver quel concept fait qu'il y a une erreur dans ce code. Trouvez un moyen d'afficher 1.
*///l'erreur vient que la variable $a n'est pas globale il faut soit utiliser une variable globale soit la passer
//en paramatre 
$a = 1;
function test($a){
    echo $a;
}
test($a);
