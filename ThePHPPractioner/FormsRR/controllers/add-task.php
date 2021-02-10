<?php

$description = $_POST['task'];
//var_dump('You typed ' . $_POST['name']);
$app['database']->addTask('todos', $description);

//var_dump($_POST['task']);

require 'views/index.view.php';