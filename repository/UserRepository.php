<?php
require_once "../config.php";
require_once "../src/classes/Db.php";
require_once "../src/classes/user.php";

class UserRepository extends Db 
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM user');

        $user = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['Nom'],
                $user['Prenom'],
                $user['Email'],
                $user['MotDePasse'],
                $user['Id'],


            );

            $user[] = $newUser;
        }

        return $user;
    }

    public function create($newUser)
    {
        $request = 'INSERT INTO user (Nom, Prenom, Email, MotDePasse, Id) VALUES (?, ?, ?, ?, ?)';
        $query = $this->getDb()->prepare($request);

        $query->execute([
           'Nom'=> $newUser->getNom(),
            'Prenom'=> $newUser->getPrenom(),
            'Email' =>$newUser->getEmail(),
            'MotDePasse' =>$newUser->getMotDePasse(),
            'Id' => $newUser->getId(),
        ]);
    }


    public function update($user)
{
    $request = "UPDATE user SET Nom = ?, Prenom = ?, Email= ?, MotDePasse = ? WHERE id = ?";
    
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