<?php
require "Controller/indexController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-PDO</title>
</head>
<body>

<div><p>Exercice 1 :
Afficher tous les clients.</p></div>

<?php
while($donnees1 = $requete1->fetch()){
    echo $donnees1["lastName"]  . " " . $donnees1["firstName"]  . "<br>" ;
}
$requete1->closeCursor();
?>

<div><p>Exercice 2 :
Afficher tous les types de spectacles possibles.</p></div>

<?php

while($donnees2 = $requete2->fetch()){
    echo $donnees2["type"]  . "<br>" ;
}

$requete2->closeCursor();
?>

<div><p>Exercice 3 :
Afficher les 20 premiers clients.</p></div>

<?php 


while($donnees3 = $requete3->fetch()){
    echo $donnees3["lastName"]  . " " . $donnees3["firstName"]  . "<br>" ;
}

$requete3->closeCursor();
?>

<div><p>Exercice 4 :
N'afficher que les clients possédant une carte de fidélité.</p></div>

<?php 

while($donnees4 = $requete4->fetch()){
    echo $donnees4["lastName"]  . " " . $donnees4["firstName"]  . "<br>" ;
}

$requete4->closeCursor();
?>

<div><p>Exercice 5 :
Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Les afficher comme ceci :
Nom : Nom du client
Prénom : Prénom du client
Trier les noms par ordre alphabétique.</p></div>

<?php 

while($donnees5 = $requete5->fetch()){
    echo $donnees5["lastName"]  . " " . $donnees5["firstName"]  . "<br>" ;
}

$requete5->closeCursor();
?>

<div><p>Exercice 6 :
Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p></div>

<?php 

while($donnees6 = $requete6->fetch()){
    echo "Le spétacle " . $donnees6["title"]  . " vous sera présenté par " . $donnees6["performer"]  . "<br>" . "RDV le " . $donnees6["date"] . " à " . $donnees6["startTime"] . " heure <br>" ;
}

$requete6->closeCursor();
?>


<div><p>Exercice 7 :
<pre>Afficher tous les clients comme ceci :
Nom : Nom de famille du client
Prénom : Prénom du client
Date de naissance : Date de naissance du client
Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</pre></p></div>


<?php 

while($donnees7 = $requete7->fetch()){
    echo "Nom : " . $donnees7["lastName"] . "<br>";
    echo "prénom : " . $donnees7["firstName"] . "<br>";
    echo "Date de naissance : " . $donnees7["birthDate"] . "<br>";
    if($donnees7["card"] == 1){
echo "Carte de fidélité : oui" . "<br>";
echo "Numéro de carte : " . $donnees7["cardNumber"] . "<br><br>";
    } else {
        echo "Carte de fidélité : non" . "<br><br>";
    }
}

$requete7->closeCursor();
?>

</body>
</html>