<?php
require "../Controller/liste-rendezvousController.php";
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

<h2>Rendez-vous pris : </h2>
<?php 
$appointmentsList = $appointment->getAllAppointments();
foreach($appointmentsList as $key => $value) {
    ?>

    <p>Rendez-vous : <?= $value['dateHour'] . "<br>" ?> Avec <?= $value['lastname'] . " " . $value['firstname'] ?> <br></p>

    <div><a href="rendezvous.php?id=<?= $value['id'] ?>">Plus d'informations sur le rendez-vous</a></div>
   
    <?php
}

?>

<div><a href="ajout-rendezvous.php">Prendre un nouveau rendez-vous</a></div>
<div><a href="../index.php">Retour à l'accueil</a></div>
    
</body>
</html>