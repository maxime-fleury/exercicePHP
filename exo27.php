<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="exo27.php" method="post">
        <label for="nom">Entrer votre nom : </label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <label for="email">Entrer votre email : </label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <label for="age">Entrer votre age (vous devez être majeur) : </label>
        <input type="number" name="age" id="age">
        <br>
        <br>
        <label for="message"></label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer les informations envoyer par le formulaire après sa soumission puis afficher les !
    //Il faut vérifier que : le nom ne soit pas vide, que l'adresse email soit valide, 
    //que l'age soit supérieur ou égal à 18 et que le message ne soit pas vide. 
    //Trouver un moyen d'afficher le message avec des retours à la ligne si celui-ci en possède.

    //Code à faire ici
    if(isset($_POST["age"]) && isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"])){//les variables exist
        $age_renseigne = true;
        $nom_renseigne = true;
        $message_renseigne = true;
        $majeur = false;
        $email_valide = false;
        if(empty($_POST["age"])) {//non null
            echo "Merci de bien vouloir renseigner votre âge.<br>";
            $age_renseigne = false;
        }
        else{//non vide go tester age
            if($_POST['age']>=18)
                $majeur = true;
                else{
                    echo "<p>Erreur : vous n'êtes pas majeur !</p><br>";
                }
        }
        if(empty($_POST["nom"])){//non null
            echo "<p>Merci de bien vouloir renseigner votre nom.</p><br>";
            $nom_renseigne = false;
        }
        if(empty($_POST["email"])){
            echo "<p>Merci de bien vouloir renseigner votre adress email.</p><br>";
            $email_valide = false;
        }
        else{
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo "<p>Merci de bien vouloir renseigner UNE adress email VALIDE !</p><br>";
                $email_valide = false;
              }
              else{
                  $email_valide= true;
              }
        }
        if(empty($_POST["message"])){
            echo "<p>Merci de bien vouloir renseigner un message.</p><br>";
            $message_renseigne = true;
        }
        
        if($age_renseigne && $nom_renseigne && $majeur && $email_valide){//afficher seulement si aucune erreur
            echo "<p>Nom: ".$_POST["nom"]."<br>Age: ".$_POST["age"];
            echo "<br>Vous êtes bien majeur !";
            echo "<br>Votre email ". $_POST["email"] ." est bien valide";
            echo "<br> votre message est : ".htmlentities($_POST["message"])."</p>";
        }
    }
    
    ?>
</body>

</html>