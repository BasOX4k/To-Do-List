<?php 

class Task
{
    private $id;
    private $titre;
    private $description;
    private $date;
    private $priorite;


    function __construct($titre, $description, $date, $priorite, $id)

    {
        $this->titre = $titre;
        $this->description = $description;
        $this->date = $date;
        $this->priorite = $priorite;
        $this->id = $id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
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