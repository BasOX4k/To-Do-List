<?php

require_once __DIR__ . '/../src/classes/task.php';
require_once __DIR__ . '/../repository/TaskRepository.php';
require_once __DIR__ . '/../src/classes/Database.php';

var_dump($_POST);
if (
    !empty ($_POST) && 
    isset ($_POST['Titre']) &&
    isset ($_POST['Description']) &&
    isset ($_POST['Date']) &&
    isset ($_POST['Priorite']) 
) {
    $Titre = htmlspecialchars($_POST['Titre']);
    $Titre = htmlspecialchars($_POST['Description']);
    $Titre = htmlspecialchars($_POST['Date']);
    $Titre = htmlspecialchars($_POST['Priorite']);

    $newTask = new Task (
        $Id,
        $Titre,
        $Description,
        $Date,
        $Priorite
    );
    $taskRepository = new TaskRepository();

    $taskRepository->create($newTask);

    header('Location: ./../index.php');
}
