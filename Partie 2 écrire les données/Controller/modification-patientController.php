<?php 
require "../Models/Database.php";
require "../Models/Patient.php";


$patient = new Patients();


//On test si les $_POST sont bien en place via des ternaires, si ils y sont, alors le $_POST = la variable correspondant

isset($_POST['newLastname']) ? $newLastname = $_POST['newLastname'] : "";
isset($_POST['newFirstname']) ? $newFirstname = $_POST['newFirstname'] : "";
isset($_POST['newBirthdate']) ? $newBirthdate = $_POST['newBirthdate'] : "";
isset($_POST['newPhone']) ? $newPhone = $_POST['newPhone'] : "";
isset($_POST['newMail']) ? $newMail = $_POST['newMail'] : "";
isset($_GET['id']) ? $thisId = $_GET['id'] : "";

var_dump($thisId);

//si les variables existent, alors on lance la requete

if (isset($newLastname) && isset($newFirstname) && isset($newBirthdate) && isset($newPhone) && isset($newMail) && isset($thisId)) {

//on prepare ce que je souhaite modifier

$requete2 = $patient->getDb()->prepare("UPDATE patients SET lastname = :newLastname, firstname = :newFirstname, birthdate = :newBirthdate, phone = :newPhone, mail = :newMail WHERE id = $thisId");

//On ajoute les élements qu on veut et on execute l insert

$requete2->execute(array(
    'newLastname' => $newLastname,
    'newFirstname' => $newFirstname,
    'newBirthdate' => $newBirthdate,
    'newPhone' => $newPhone,
    'newMail' => $newMail
));
echo "<script>alert(\"le patient a bien été modifié\")</script>";

}