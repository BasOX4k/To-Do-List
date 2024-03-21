<?php 

class Task
{
    private $Titre;
    private $Description;
    private $Date;
    private $Priorite;
    private $Id;


    function __construct($Titre, $Description, $Date, $Priorite, $Id)

    {
        $this->Titre = $Titre;
        $this->Description = $Description;
        $this->Date = $Date;
        $this->Priorite = $Priorite;
        $this->Id = $Id;
    }

    public function getTitre()
    {
        return $this->Titre;
    }

    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
    }

    public function getDescription()
    {
        
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate($Date)
    {
        $this->Date = $Date;
    }
    public function getPriorite()
    {
        return $this->Priorite;
    }

    public function setPriorite($Priorite)
    {
        $this->Priorite = $Priorite;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }
}