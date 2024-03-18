<?php

require_once __DIR__ . "./../classes/Db.php";
require_once __DIR__ . "./../classes/task.php";

class TaskRepository extends Db 
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM task');

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
        $request = 'INSERT INTO task (titre, description, date, priorite, id) VALUES (?, ?, ?, ?, ?)'; 
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newTask->getTitre(),
            $newTask->getDescription(),
            $newTask->getDate(),
            $newTask->getPriorite(),
            $newTask->getId(),
        ]);
    }

    public function update ($task)
    {
        $request = "UPDATE task SET titre = ?, description = ?, date = ?, priorite = ?, WHERE id = ?";

        $query = $this->getDb()->prepare($request);

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
        $query = $this->getDb()->prepare($request);

        $query->execute([$task->getId()]);
    }
}