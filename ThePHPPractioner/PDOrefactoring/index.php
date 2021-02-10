<?php

// require 'Task.php'; there was a discussion of mapping to Task, then reverted


// moved to bootstrap in refactor #3
// require 'database/QueryBuilder.php';
// require 'database/Connection.php';
// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

$query = require 'bootstrap.php'; // this syntax is a little uncomfortable, but OK



$tasks = $query->selectAll('todos'); // or selectAll('todos', 'Task') to save to map to Task w/Query Builder

// die(var_dump($tasks));

require 'index.view.php';