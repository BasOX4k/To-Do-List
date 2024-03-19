<?php


require_once "../config.php";
require_once '../src/classes/user.php';
require_once  '../Repository/UserRepository.php';
require_once  '../src/classes/Db.php';
 

if (
    !empty($_POST) &&
    isset($_POST['Nom']) &&
    isset($_POST['Prenom']) &&
    isset($_POST['Email']) &&
    isset($_POST['MotDePasse']) 
) {
    $Nom = htmlspecialchars($_POST['Nom']);
    $Prenom = htmlspecialchars($_POST['Prenom']);
    $Email = htmlspecialchars($_POST['Email']);
    $MotDePasse = $_POST['MotDePasse']; // No need for htmlspecialchars here

    // Hash the password using bcrypt
    $hashedMotDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);

    $newUser = new User (
        $Id,
        $Nom,
        $Prenom,
        $Email,
        $hashedMotDePasse
    );

    $UserRepository = new UserRepository();

    $UserRepository->create($newUser);

    header('Location: ./../index.php');
}
