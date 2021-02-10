<?php

require 'Task.php';

require 'functions.php';

require 'database/Connection.php'; // abstracted in refactor #1

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';