<?php


try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=takenlijst', 'root', '');
} catch (PDOException $e) {
    die('Could not connect.');
}


require 'index.view.php';


?>




// $person = [
//     'age:' => 31,
//     'hair:' => 'dark blond',
//     'career:' => 'web developer',
//     'country:' => 'The Netherlands',
//     'place:' => 'Groningen'
// ];

// // sometimes you need to add, so here is the push
// $person['huur/koop woning:'] = 'Huur';


// $greeting = 'Hello World';




// $greeting = 'Gegroet';
// $compliment = 'beste';
// // $name = $_GET['name'];
// $name = 'Gerard Koetje';

// echo "$greeting, $compliment $name";

// require 'functions.php';

// $animals = ['dog', 'cat'];


// dd($animals);

// dd('hallo wereld');


// require 'functions.php';

// class Task {
//     public $description;

//     protected $completed = false;

//     public function __construct($description)
//     {
//         $this->description = $description;
//     }

// public function complete()
// {
//     $this->completed = true;

// }
// public function isComplete()
// {
//     return$this->completed;
// }
// }



// $tasks = [
//     new task('lessen kijken tot 20'),
//     new task('naar huisarts'),
//     new task('was opruimen'),
// ];
// $tasks[0]->complete();
// require 'index.view.php';


// $task->complete();
// var_dump($task->isComplete());








