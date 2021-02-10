<?php
require "../Models/Database.php";
require "../Models/Patient.php";
require "../Models/Appointments.php";
$patient = new Patients();
$appointment = new Appointements();


//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_GET['id']) ? $thisId = $_GET['id'] : "";


//si les variables existent, alors on lance la requete

if (isset($thisId)) {

//on prepare ce que je souhaite modifier

$queryDeleteAppointment = $appointment->getDb()->prepare("DELETE FROM appointments WHERE idPatients = $thisId");
$queryDeletePatient = $patient->getDb()->prepare("DELETE FROM patients WHERE id = $thisId ");


//On ajoute les élements qu on veut et on execute l insert

$queryDeleteAppointment->execute();
$queryDeletePatient->execute();


echo "<script>alert(\"le rendez-vous a bien été supprimé\")</script>";

}