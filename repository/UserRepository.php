<?php

require_once __DIR__"./../classes/Db.php";
require_once __DIR__"./../../classes/Student.php";

class UserRepository extends Db 
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM user');

        $student = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['nom'],
                $user['prenom'],
                $user['email'],
                $user['motDePasse'],
                $user['id'],


            );

            $user[] = $newUser;
        }

        return $user;
    }

    public function creat($newUser)
    {
        $request = 'INSERT INTO student (nom, prenom, email, motDePasse, id) VALUES (?, ?, ?, ?, ?)';
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newUser->getNom(),
            $newUser->getPrenom(),
            $newUser->getEmail(),
            $newUser->getmotDePasse(),
            $newUser->getId(),
        ]);
    }
}
