<?php
require "Models/Database.php";
require "Models/Clients.php";

$Clients = new Clients();
var_dump($Clients->getAllClients());