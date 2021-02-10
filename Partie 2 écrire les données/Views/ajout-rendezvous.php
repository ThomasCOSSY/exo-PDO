<?php
require "../Controller/ajout-rendezvousController.php";
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

    <form action="ajout-rendezvous.php" method="post">

        <div>
            <label for="dateHour">Heure du rendez-vous :</label>
            <select name="dateHour" id="dateHour">
    <option value="">selectionner un horaire</option>
    <option>2021-02-15 09:00:00</option>
    <option>2021-02-15 10:00:00</option>
    <option>2021-02-15 11:00:00</option>
    <option>2021-02-15 12:00:00</option>
    </select>
        </div>

        <div>
            <label for="idPatients">Nom du Patient :</label>
            <select name="idPatients" id="idPatients">
    <option value="">selectionner le patient</option>
    <?php 
$patientsList = $patient->getAllPatients();
foreach($patientsList as $key => $value) {
    ?>
<option value="<?= $value['id']?>"><?= $value['lastname'] . " " . $value['firstname'] ?></option>    
<?php
}
?>
</select>
        </div>
        
        <input type="submit" name="valider" value="Enregistrer le Rendez-vous"/>
    </form>

    <a href="../index.php">Retour à l'accueil</a>

</body>

</html>