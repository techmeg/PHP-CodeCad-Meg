<?php

require 'Task.php';

//require 'functions.php'; //no need after abstracting query builder
require 'database/QueryBuilder.php';

require 'database/Connection.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

//$tasks = fetchAllTasks($pdo); //abstracted in refactor #2

require 'index.view.php';