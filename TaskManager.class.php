<?php
require_once '../Taches/Task.class.php';
class TaskManager {
    protected $listTasks = [];

    public function addTask(Task $task) {
        $this->listTasks[] = $task;
    }

    public function deleteTask($taskID) {
        foreach ($this->listTasks as $key => $task) {
            if ($task->getID() === $taskID) {
                unset($this->listTasks[$key]);
                break;
            }
        }
    }

    public function displayTasks() {
        foreach ($this->listTasks as $task) {
            echo "Task ID: " . $task->getID() . ", Content: " . $task->getContent() . ", State: " . $task->getState() . "\n";
        }
    }

    public function MarquerTerminee($taskID) {
        foreach ($this->listTasks as $task) {
            if ($task->getID() === $taskID) {
                $task->editState("Completed");
                break;
            }
        }
    }
}