<?php

require_once __DIR__ .  "./../classes/Db.php";
require_once __DIR__ . "./../../classes/user.php";

class UserRepository extends Db 
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM user');

        $user = [];

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

    public function create($newUser)
    {
        $request = 'INSERT INTO user (nom, prenom, email, motDePasse, id) VALUES (?, ?, ?, ?, ?)';
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newUser->getNom(),
            $newUser->getPrenom(),
            $newUser->getEmail(),
            $newUser->getMotDePasse(),
            $newUser->getId(),
        ]);
    }


    public function update($user)
{
    $request = "UPDATE user SET nom = ?, prenom = ?, email= ?, motDePasse = ? WHERE id = ?";
    
    $query = $this->getDb()->prepare($request);


    $query->execute([
        $user->getNom(),
        $user->gePrenom(),
        $user->getEmail(),
        $user->getMotDePasse(),
        $user->getId(),
    ]);
    
} 


    public function delete($user)
    {

    $request = 'DELETE FROM user WHERE id= ?';
    $query = $this->getDb()->prepare($request);

    $query->execute([$user->getId()]);
    }
}