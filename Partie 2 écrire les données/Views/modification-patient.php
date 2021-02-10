<?php
require "../Controller/modification-patientController.php";
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

    <form action="modification-patient.php?id=<?= $thisId ?>" method="post">
        <div>
            <label for="newLastname">Nom :</label>
            <input type="text" id="newLastname" name="newLastname" value="<?= isset($_GET['lastname']) ? $_GET['lastname'] : $newLastname ?>">
        </div>
        <div>
            <label for="newFirstname">prénom :</label>
            <input type="text" id="newFirstname" name="newFirstname" value="<?= isset($_GET['firstname']) ? $_GET['firstname'] : $newFirstname ?>">
        </div>
        <div>
            <label for="newBirthdate">date de naissance :</label>
            <input type="text" id="newBirthdate" name="newBirthdate" value="<?= isset($_GET['birthdate']) ? $_GET['birthdate'] : $newBirthdate ?>">
        </div>
        <div>
            <label for="newPhone">téléphone :</label>
            <input type="text" id="newPhone" name="newPhone" value="<?= isset($_GET['phone']) ? $_GET['phone'] : $newPhone?>">
        </div>
        <div>
            <label for="newMail">mail :</label>
            <input type="text" id="newMail" name="newMail" value="<?= isset($_GET['mail']) ? $_GET['mail'] : $newMail ?>">
        </div>
        <input type="submit" name="valider" value="envoyer le formulaire"/>
    </form>

    <div><a href="../index.php">Retour à l'accueil</a></div>

</body>

</html>