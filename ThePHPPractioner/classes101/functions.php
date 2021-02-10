<?php

function checkID($person) {
  if($person['age'] >= 21) {
    echo "Come on in, ";
    echo $person['name'];
  }
  else {
    echo "Come back when you're 21, ";
    echo $person['name'];
  }
}

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

?>
