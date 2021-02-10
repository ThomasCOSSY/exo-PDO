<?php 
require "../Models/Database.php";
require "../Models/Patient.php";
require "../Models/Appointments.php";


$patient = new Patients();
$appointment = new Appointements();


//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['dateHour']) ? $newDateHour = $_POST['dateHour'] : "";
isset($_POST['idPatients']) ? $newIdPatients = $_POST['idPatients'] : "";

isset($_GET['id']) ? $thisId = $_GET['id'] : "";

var_dump($thisId);

//si les variables existent, alors on lance la requete

if (isset($newDateHour) && isset($newIdPatients) && isset($thisId)) {

//on prepare ce que je souhaite modifier

$requete2 = $patient->getDb()->prepare("UPDATE appointments SET dateHour = :newDateHour, idPatients = :newIdPatients WHERE id = $thisId");

//On ajoute les élements qu on veut et on execute l insert

$requete2->execute(array(
    'newDateHour' => $newDateHour,
    'newIdPatients' => $newIdPatients
    
));
echo "<script>alert(\"le rendez-vous a bien été modifié\")</script>";

}