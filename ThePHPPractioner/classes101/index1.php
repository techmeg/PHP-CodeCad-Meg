<?php
require 'functions.php';

class Task {

  protected $description;
  protected $completed = false;

  public function __construct($description)
  {
    //automatically triggered on instantiation
    $this ->description = $description;
  }

  public function isCompleted()
  {
    return $this->completed;
  }

  public function complete()
  {
    return $this->completed = true;
  }
}


$task = new Task ('Go to the store');
//dd($task);

$task -> complete();

var_dump($task->isCompleted());