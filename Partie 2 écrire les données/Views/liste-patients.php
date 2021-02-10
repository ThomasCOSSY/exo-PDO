<?php
require "../Controller/liste-patientsController.php";
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

<form method="get" action="search.php">
Recherche : <input type="text" name="q"/>
<input type="submit" value="Cherche"/>
</form>

<h2>Patients : </h2>
<?php 
$patientsList = $patient->getAllPatients();
foreach($patientsList as $key => $value) {
    ?>

    <p><?= $value['lastname'] . " " . $value['firstname'] ?></p>

    <div><a href="profil-patient.php?id=<?= $value['id'] ?>">Plus d'informations sur le patient</a></div>
    <div><a href="suppression-patient.php?id=<?= $value['id'] ?>">supprimer le patient et ses rendez-vous</a></div>
    <?php
}
?>

<div><a href="ajout-patient.php">Enregistrer un patient</a></div>
<div><a href="../index.php">Retour à l'accueil</a></div>
    
</body>
</html>