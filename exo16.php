<?php
//Créer une fonction qui retourne la chaîne de caractère qui lui est envoyé sans voyelle (a, e, i, o, u, y) et affichez ce mot avant et après le changement ! Vous pouvez utiliser n'importe qu'elle mot pour cela comme girafe (ce qui donnerait grf) par exemple, peut-importe

//Code à faire ici
$mot_test = "Ceci est un test avec une phrase juste pour voir si cela fonctionne correctement";
echo "phrase d'origine : ".$mot_test."<br> phrase sans voyelle : ".replace_voyelle($mot_test);
function replace_voyelle($mot){
    $x = "aeiouy";
    $voyelle = str_split($x,1);//obtient un tableau avec chaque voyelle dedans...
    return str_replace($voyelle, "", $mot);
}