<?php

require_once  "./../config.php";

class DB
{
    private $Db;

    public function __construct()
    {
        try{
            $this->Db = new PDO(
                'mysql:host=' . DATABASE_HOST . 'dbname=' . DATABASE_NAME . ';charset=utf8', DATABASE_USERNAME, DATABASE_PASSWORD
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getDb()
    {
        return $this->Db;
    }
}