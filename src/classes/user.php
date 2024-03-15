<?php

class User 
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;

    


    function __construct($nom, $prenom, $email, $motDePasse, $id)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->name;
    }

    public function setNom($nom)
    {
        $this->name = $name;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMotDePasse()
    {
        return $this->getMotDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->getMotDePasse = $motDePasse;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}