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

}