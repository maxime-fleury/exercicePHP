<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="exo26.php" method="post">
        <label for="note1">Note 1 : </label>
        <input type="number" name="note1" id="note1">
        <br>
        <br>
        <label for="note2">Note 2 : </label>
        <input type="number" name="note2" id="note2">
        <br>
        <br>
        <label for="note3">Note 3 : </label>
        <input type="number" name="note3" id="note3">
        <br>
        <br>
        <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer les notes envoyer par le formulaire après sa soumission puis afficher les, ainsi que la moyenne des 3 notes ! 

    //Code à faire ici

    if(isset($_POST["note1"]) && isset($_POST["note2"]) && isset($_POST["note3"])){//les variables exist
        $note1_renseigne = true;
        $note2_renseigne = true;
        $note3_renseigne = true;
        if(empty($_POST["note1"])) {//non null
            echo "Merci de bien vouloir renseigner note 1.<br>";
            $note1_renseigne = false;
        }
        if(empty($_POST["note2"])){//non null
            echo "Merci de bien vouloir renseigner note 2.<br>";
            $note2_renseigne = false;
        }
        if(empty($_POST["note3"])){//non null
            echo "Merci de bien vouloir renseigner note 3.";
            $note3_renseigne = false;
        }
       
        if($note1_renseigne && $note2_renseigne && $note3_renseigne)//afficher ET Calculer si seulement si aucune erreur
        {
            $moyenne = ($_POST["note1"] + $_POST["note2"] + $_POST["note3"])/3;
            echo "<p>Note 1 : ".$_POST["note1"]." Note 2: ".$_POST["note2"]." Note 3 : ".$_POST["note3"]."<br>Moyenne =".$moyenne."</p>";
        }
    }

    ?>
</body>

</html>