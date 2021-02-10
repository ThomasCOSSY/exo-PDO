<?php
require "../Models/Database.php";
require "../Models/Patient.php";
require "../Models/Appointments.php";

$patient = new Patients();
$appointment = new Appointements();

isset($_GET['id']) ? $patientId = $_GET['id'] : "";


