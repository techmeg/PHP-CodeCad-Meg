<?php

class QueryBuilder 
{

  protected $pdo;

  public function __construct($pdo) 
  { //param as (PDO $pdo) to restrict type to PDO
    $this->pdo = $pdo;
  }

  public function selectAll($table) 
  {

    $statement = $this->pdo->prepare("select * from ($table)"); 

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS); 
  
  }

  public function addTask($table, $description)
  {
    $statement = $this->pdo->prepare("insert into $table(description, completed) values(:description, false)");
    $statement->bindParam('description', $description);
    
    if($statement->execute()) {
      echo 'To Do added';
    } else {
      echo 'An error occurred';
    }
  }

}