<?php

class Patients extends Database {

    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $phone;
    private $mail;


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
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getphone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setphone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setmail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    public function addPatient($lastname, $firstname, $birthdate, $phone, $mail) {
        $query = "INSERT INTO patients (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)";
        $queryAddPatient = parent::getDb()->prepare($query);
        $queryAddPatient->bindValue("lastname", $lastname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("firstname", $firstname, PDO::PARAM_STR);
        $queryAddPatient->bindValue("birthdate", $birthdate, PDO::PARAM_STR);
        $queryAddPatient->bindValue("phone", $phone, PDO::PARAM_STR);
        $queryAddPatient->bindValue("mail", $mail, PDO::PARAM_STR);
        
        
        if($queryAddPatient->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function getAllPatients() {
        $query = "SELECT * FROM `Patients`";
        $queryGetAllPatients = parent::getDb()->prepare($query);
        $queryGetAllPatients->execute();
        $resultsQuery = $queryGetAllPatients->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    public function getOnePatients($patientId) {
        $query = "SELECT * FROM `Patients` WHERE id = :patientId";        
        $queryGetOnePatients = parent::getDb()->prepare($query);
        $queryGetOnePatients->bindValue("patientId", $patientId, PDO::PARAM_INT);
        $queryGetOnePatients->execute();
        $resultsQuery = $queryGetOnePatients->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

   

}