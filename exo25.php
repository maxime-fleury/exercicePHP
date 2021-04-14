<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="exo25.php" method="post">
        <label for="nom">Entrer votre nom : </label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <label for="age">Entrer votre âge : </label>
        <input type="number" name="age" id="age">
        <br>
        <br>
        <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer le nom et l'âge envoyer par le formulaire après sa soumission puis afficher le dans un paragraphe !
    // Il faut vérifier que les informations ont bien été envoyées avant d'afficher quoi que ce soit. 
    //(Vous devez trouver dans le HTML quel différence il y a entre cet exercice et le précédent, si si, il y en a une).

    //Code à faire ici
    if(isset($_POST["age"]) && isset($_POST["nom"])){//les variables exist
        $age_renseigne = true;
        $nom_renseigne = true;
        if(empty($_POST["age"])) {//non null
            echo "Merci de bien vouloir renseigner votre âge.<br>";
            $age_renseigne = false;
        }
        if(empty($_POST["nom"])){//non null
            echo "Merci de bien vouloir renseigner votre nom.";
            $nom_renseigne = false;
        }
        if($age_renseigne && $nom_renseigne)//afficher seulement si aucune erreur
            echo "<p>Nom: ".$_POST["nom"]."<br>Age: ".$_POST["age"]."</p>";
    }
    ?>

</body>

</html>