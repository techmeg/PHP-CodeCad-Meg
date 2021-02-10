<?php

class QueryBuilder 
{

  protected $pdo;

  public function __construct($pdo) 
  { //param as (PDO $pdo) to restrict type to PDO
    $this->pdo = $pdo;
  }

  public function selectAll($table) // or selectAll($table, $intoClass) to save to a class
  {

    $statement = $this->pdo->prepare("select * from ($table)"); // note: single quotes fail 

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS); // or fetchAll(PDO::FETCH_CLASS, $intoClass)
  
  }

}