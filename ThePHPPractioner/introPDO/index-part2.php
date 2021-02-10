<?php

require 'Task.php';

//mysql_connect(); is deprecated; unsafe. PDO safer.
try {

  $pdo = new PDO('mysql:host=192.168.50.4;dbname=mytodos', 'external', 'external');

} catch(PDOexception $e) {

  //die("Could not connect");
  die($e->getMessage()); //getMessage is a method of exception

}

$statement = $pdo ->prepare('select * from todos');

$statement->execute();

//var_dump($statement->fetchAll(PDO::FETCH_OBJ));
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//var_dump($tasks[0]->description);

// you can add a method and call it.
//var_dump($tasks[0]->foobar());

require 'index.view.php';