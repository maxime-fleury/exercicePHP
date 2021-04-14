<?php
$animaux = [
    [
        "type" => "chien",
        "nom" => "Milou"
    ],
    [
        "type" => "chat",
        "nom" => "Félix"
    ],
    [
        "type" => "chien",
        "nom" => "Beethoven"
    ], 
    [
        "type" => "chat",
        "nom" => "Caramel"
    ]
];
function get_all($animaux){
    get_dog($animaux);
    get_cat($animaux);
}
function get_dog($animaux){
    for($i = 0; $i < 4; $i++){
        if($animaux[$i]["type"]=="chien"){
            echo $animaux[$i]["type"] . " : " .  $animaux[$i]["nom"]."<br>";
        }
    }
}
function get_cat($animaux){
    for($i = 0; $i < 4; $i++){
        if($animaux[$i]["type"]=="chat"){
            echo $animaux[$i]["type"] . " : " .  $animaux[$i]["nom"]."<br>";
        }
    }
}
//Créez un système grâce au html déjà présent pour filtrer les animaux dans le tableau à afficher en utilisant la méthode GET :
// soit tous, soit les chiens, soit les chats. Vous devrez créer différentes fonctions pour cela.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="?id=all">Tous</a>  <!-- href à compléter -->
        <a href="?id=dog">Chien</a> <!-- href à compléter -->
        <a href="?id=cat">Chats</a> <!-- href à compléter -->
    </nav>
    <br>
    <br>
    <br>
    <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            
            if($id == "all"){
                get_all($animaux);
            }
            if($id == "dog"){
                get_dog($animaux);
            }
            if($id == "cat"){
                get_cat($animaux);
            }
        }

    ?>  
</body>
</html>