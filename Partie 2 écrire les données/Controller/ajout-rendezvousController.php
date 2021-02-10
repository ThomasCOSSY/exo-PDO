<?php

require "../Models/Database.php";
require "../Models/Patient.php";
require "../Models/Appointments.php";
$patient = new Patients();
$appointment = new Appointements();


//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['dateHour']) ? $dateHour = $_POST['dateHour'] : "";
isset($_POST['idPatients']) ? $idPatients = $_POST['idPatients'] : "";

//si les variables existent, alors on lance la requete

if (isset($dateHour) && isset($idPatients)) {

    //on prepare ce que je souhaite inserer

    $requete3 = $appointment->getDb()->prepare("INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)");

    //On ajoute les élements qu on veut et on execute l insert

    $requete3->execute(array(
        'dateHour' => $dateHour,
        'idPatients' => $idPatients
       
    ));
    echo "<script>alert(\"le rendez-vous a bien été enregistré\")</script>";
}