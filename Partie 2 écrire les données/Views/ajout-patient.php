<?php
require "../Controller/ajout-patientController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ajout-patient.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <div>
            <label for="firstname">prénom :</label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div>
            <label for="birthdate">date de naissance :</label>
            <input type="text" id="birthdate" name="birthdate">
        </div>
        <div>
            <label for="phone">téléphone :</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div>
            <label for="mail">mail :</label>
            <input type="text" id="mail" name="mail">
        </div>
        <input type="submit" name="valider" value="envoyer le formulaire"/>
    </form>

    <a href="../index.php">Retour à l'accueil</a>

</body>

</html>