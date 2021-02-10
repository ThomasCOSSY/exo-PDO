<?php
require "../Controller/profil-patientController.php";
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

    <h2>Infos patient</h2>


    <?php
    $patientsList = $patient->getOnePatients($patientId);
    foreach ($patientsList as $key => $value) {

        echo "Nom : " . $value["lastname"] . "<br>";
        echo "prénom : " . $value["firstname"] . "<br>";
        echo "Date de naissance : " . $value["birthdate"] . "<br>";
        echo "numéro de téléphone : " . $value["phone"] . "<br>";
        echo "mail : " . $value["mail"] . "<br><br>";
    }
    ?>

    <?php
    if(!empty($appointmentsPatient)) {
    $appointmentsPatient = $appointment->getAppointmentsPatient($patientId);
    foreach ($appointmentsPatient as $key2 => $value2) {
        echo "Date du rendez-vous : " . $value2["dateHour"] . "<br><br>";
    }}
    ?>


    <div><a href="modification-patient.php?lastname=<?= $value['lastname'] ?>&firstname=<?= $value['firstname'] ?>&birthdate=<?= $value['birthdate'] ?>&phone=<?= $value['phone'] ?>&mail=<?= $value['mail'] ?>&id=<?= $value['id'] ?>">Modifier le patient</a></div>
    <div><a href="liste-patients.php">Retour à la liste</a></div>
    <div><a href="../index.php">Retour à l'accueil</a></div>

</body>

</html>