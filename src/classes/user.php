<?php

class User 
{
    private $Nom;
    private $Prenom;
    private $Email;
    private $MotDePasse;
    private $Id;
    
    


    function __construct($Nom, $Prenom, $Email, $MotDePasse, $Id = null)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Email = $Email;
        $this->MotDePasse = $MotDePasse;
        $this->Id = $Id;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }


    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    public function setMotDePasse($MotDePasse)
    {
        $this->MotDePasse = $MotDePasse;
    }

}