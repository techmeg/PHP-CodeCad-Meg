<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function connectToDb(){
  try {

    return $pdo = new PDO('mysql:host=192.168.50.4;dbname=mytodos', 'external', 'external');
  } catch (PDOexception $e) {

    die($e->getMessage()); 

  }
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

?>
