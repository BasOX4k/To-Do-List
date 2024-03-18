<?php

require_once __DIR__ . "/src/Classes/user.php";
require_once __DIR__ . "/src/Repository/UserRepository.php";

if (
    !empty($_POST) &&
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['email']) &&
    isset($_POST['motDePasse']) 
) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motDePasse = $_POST['motDePasse']; // No need for htmlspecialchars here

    // Hash the password using bcrypt
    $hashedMotDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);

    $newUser = new User (
       $id,
        $nom,
        $prenom,
        $email,
        $hashedMotDePasse,
    );

    $UserRepository = new UserRepository();

    $UserRepository->create($newUser);

    header('Location: ./../index.php');
}
