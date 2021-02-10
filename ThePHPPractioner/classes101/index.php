<?php
require 'functions.php';

class Task {

  public $description;
  public $completed = false;

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


$tasks = [
new Task ('Go to the store'),
new Task ('Do the laundry'),
new Task ('Clean my room')
];

$tasks[1]->complete();

//dd($tasks);
require 'index.view.php';