<?php
require_once '../Taches/TaskManager.class.php';
class CompletedTaskManager extends TaskManager {
    public function displayCompletedTasks() {
        echo "Completed Tasks:\n";
        foreach ($this->listTasks as $task) {
            if ($task->getState() === "Completed") {
                echo "Task ID: " . $task->getID() . ", Content: " . $task->getContent() . "\n";
            }
        }
    }
}