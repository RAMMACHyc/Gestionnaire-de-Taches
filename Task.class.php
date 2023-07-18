<?php
class Task {
    private $ID;
    private $content;
    private $state;

    public function __construct($ID, $content, $state) {
        $this->ID = $ID;
        $this->content = $content;
        $this->state = $state;
    }

    public function modifyContent($newContent) {
        $this->content = $newContent;
    }

    public function editState($newState) {
        $this->state = $newState;
    }

    public function getID() {
        return $this->ID;
    }

    public function getContent() {
        return $this->content;
    }

    public function getState() {
        return $this->state;
    }
}



// Jouter une tache
$task1 = new Task(1, "Rapport de projet complet", "En cours");
$task2 = new Task(2, "Acheter des produits d'épicerie", "To Do");


$taskManager = new TaskManager();

// Add tasks to the manager
$taskManager->addTask($task1);
$taskManager->addTask($task2);

// Afficher les taches
echo "Tasks:\n";
$taskManager->displayTasks();

$taskManager->MarquerTerminee(1);


echo "Tasks after marking as completed:\n";
$taskManager->displayTasks();

// Delete task
$taskManager->deleteTask(2);

// Display tasks after deleting task
echo "Tasks after deleting:\n";
$taskManager->displayTasks();


$completedTaskManager = new CompletedTaskManager();

// Add tasks to the completed task manager
$completedTaskManager->addTask($task1);

// Display completed tasks using the new method
echo "Completed tasks:\n";
$completedTaskManager->displayCompletedTasks();

