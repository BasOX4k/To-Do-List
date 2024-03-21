<?php

require_once __DIR__ ."/../src/classes/Database.php";
require_once __DIR__ ."/../src/classes/user.php";

class UserRepository extends Database 
{
    public function getAll()
    {
        $data = $this->getDB()->query('SELECT * FROM todo_user');

        $user = [];

        foreach ($data as $user) {
            $newUser = new User(
                $user['Nom'],
                $user['Prénom'],
                $user['MotDePasse'],
                $user['Email'],
                $user['Id'],


            );

            $user[] = $newUser;
        }

        return $user;
    }

    public function create($newUser)
    {
        $request = 'INSERT INTO todo_user (Nom,	Prenom,		Email ,MotDePasse	) VALUES ( :Nom, :Prenom, :Email , :MotDePasse)';
        $query = $this->getDB()->prepare($request);
        

        $query->execute([
           'Nom'=> $newUser->getNom(),
            'Prenom'=> $newUser->getPrenom(),
            'Email' =>$newUser->getEmail(),
            'MotDePasse' =>$newUser->getMotDePasse(),
            // 'Id' => $newUser->getId(),
        ]);
    }


    public function update($user)
{
    $request = "UPDATE user SET Nom = ?, Prénom = ?, Email= ?, MotDePasse = ? WHERE id = ?";
    
    $query = $this->getDB()->prepare($request);


    $query->execute([
        $user->getNom(),
        $user->getPrenom(),
        $user->getEmail(),
        $user->getMotDePasse(),
        $user->getId(),
    ]);
    
} 


    public function delete($user)
    {

    $request = 'DELETE FROM user WHERE id= ?';
    $query = $this->getDB()->prepare($request);

    $query->execute([$user->getId()]);
    }
}