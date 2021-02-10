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

  public function insert($table, $parameters) 
  {
    //insert into users (name) values ('Joe');
    //insert into users (name, age) values (:name, :age);
    //insert into %s (%s) values (%s);

    //query expects an array -- in this case only passing one value: name

    $sql = sprintf('insert into %s (%s) values (%s)', 
    $table, 
    implode(', ', array_keys($parameters)),
//die(var_dump(array_keys($parameters)));
    ':' . implode(', :', array_keys($parameters)) //trickery to get : before first param
    );
//die(var_dump($sql));

    try {
          $statement = $this->pdo->prepare($sql);

          //$statement->bindParam(':name', 'Joe');
          $statement->execute($parameters);
    } catch (Exception $e) {

      die("Something went wrong.");

    } 
  }
}