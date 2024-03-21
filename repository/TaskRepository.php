<?php

require_once __DIR__ . "/../src/classes/Database.php";
require_once __DIR__ . "/../src/classes/task.php";

class TaskRepository extends Database 
{
    public function getAll()
    {
        $data = $this->getDB()->query('SELECT * FROM todo_task');

        $tasks = [];

        foreach ($data as $taskData) {
            $task = new task(
                $taskData['titre'],
                $taskData['description'],
                $taskData['date'],
                $taskData['priorite'],
                $taskData['id']
            );

            $tasks[] = $task;
        }

        return $task;
    }

    public function create($newTask)
    {
        $request = 'INSERT INTO todo_task (Titre,	Description, Date, Priorite	) VALUES ( :Titre, :Description, :Date , :Priorite)';
        $query = $this->getDB()->prepare($request);
        
var_dump($newTask);
        $query->execute([
           'Titre'=> $newTask->getTitre(),
            'Description'=> $newTask->getDescription(),
            'Date' =>$newTask->getDate(),
            'Priorite' =>$newTask->getPriorite(),
            // 'Id' => $newUser->getId(),
        ]);
    }


    public function update ($task)
    {
        $request = "UPDATE task SET titre = ?, description = ?, date = ?, priorite = ?, WHERE id = ?";

        $query = $this->getDB()->prepare($request);

        $query->execute([
            $task->getTitre(),
            $task->getDescription(),
            $task->getDate(),
            $task->getPriorite(),
            $task->getId(),
        ]);
    }

    public function delete ($task)
    {
        $request = 'DELETE FROM task WHERE id= ?';
        $query = $this->getDB()->prepare($request);

        $query->execute([$task->getId()]);
    }
}