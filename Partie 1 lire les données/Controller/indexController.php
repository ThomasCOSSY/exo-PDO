<?php
require "Models/Database.php";
$database = new Database();

$requete1 = $database->getDb()->query("SELECT * FROM clients");

$requete2 = $database->getDb()->query("SELECT * FROM showTypes");

$requete3 = $database->getDb()->query("SELECT * FROM clients LIMIT 20");

$requete4 = $database->getDb()->query("SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber WHERE cards.cardTypesId = 1");

$requete5 = $database->getDb()->query("SELECT * FROM clients WHERE clients.lastName LIKE 'M%' ORDER BY clients.lastName");

$requete6 = $database->getDb()->query("SELECT * FROM shows ORDER BY shows.title");

$requete7 = $database->getDb()->query("SELECT * FROM clients");


