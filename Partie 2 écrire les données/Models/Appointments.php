<?php

class Appointements extends Patients {

    private $id;
    private $dateHour;
    private $idPatients;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateHour
     */ 
    public function getDateHour()
    {
        return $this->dateHour;
    }

    /**
     * Set the value of dateHour
     *
     * @return  self
     */ 
    public function setDateHour($dateHour)
    {
        $this->dateHour = $dateHour;

        return $this;
    }

    /**
     * Get the value of idPatients
     */ 
    public function getIdPatients()
    {
        return $this->idPatients;
    }

    /**
     * Set the value of idPatients
     *
     * @return  self
     */ 
    public function setIdPatients($idPatients)
    {
        $this->idPatients = $idPatients;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }


    public function getAllAppointments() {
        $query = "SELECT appointments.id, appointments.dateHour, appointments.idPatients AS patientsNumber,  patients.lastname, patients.firstname, patients.birthdate, patients.phone, patients.mail
        FROM `appointments` INNER JOIN patients ON patients.id = appointments.idPatients";
        $queryGetAllappointments = parent::getDb()->prepare($query);
        $queryGetAllappointments->execute();
        $resultsQuery = $queryGetAllappointments->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function getOneAppointments($appointmentId) {
        $query = "SELECT appointments.id, appointments.dateHour, appointments.idPatients AS patientsNumber,  patients.lastname, patients.firstname, patients.birthdate, patients.phone, patients.mail
        FROM `appointments` INNER JOIN patients ON patients.id = appointments.idPatients WHERE appointments.id = :appointmentId";
        $queryGetOneAppointment = parent::getDb()->prepare($query);
        $queryGetOneAppointment->bindValue("appointmentId", $appointmentId, PDO::PARAM_INT);
        $queryGetOneAppointment->execute();
        $resultsQuery = $queryGetOneAppointment->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function getAppointmentsPatient($patientId){
        $query = "SELECT appointments.id, appointments.dateHour, appointments.idPatients
        FROM `appointments` INNER JOIN patients ON patients.id = appointments.idPatients WHERE appointments.idPatients = :patientId";
        $queryGetAppointmentsPatient = parent::getDb()->prepare($query);
        $queryGetAppointmentsPatient->bindValue("patientId", $patientId, PDO::PARAM_INT);
        $queryGetAppointmentsPatient->execute();
        $resultsQuery = $queryGetAppointmentsPatient->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

}