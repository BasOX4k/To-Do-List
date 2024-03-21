<?php


require_once __DIR__ . '/../src/classes/user.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../src/classes/Database.php';
 
var_dump($_POST);
if (
    !empty($_POST) &&
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['email']) &&
    isset($_POST['motDePasse']) &&
    isset($_POST['confirmedMotDePasse']) 
) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motDePasse = $_POST['motDePasse']; // No need for htmlspecialchars here

    // Hash the password using bcrypt
    $hashedMotDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);

    $newUser = new User (
        $nom,
        $prenom,
        $email,
        $hashedMotDePasse
    );

    // $UserRepository = new UserRepository();
 $userRepository = new UserRepository();

 $userRepository->create($newUser);
 
 

    // $UserRepository->create($newUser);
    

    header('Location: ./../index.php');


}
