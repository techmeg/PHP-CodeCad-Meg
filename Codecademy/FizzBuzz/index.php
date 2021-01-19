<?php
$counter = 1;

while ($counter <= 100) {
  if ($counter % 15 === 0) {
    echo "Fizzbuzz\n";
  } elseif ($counter % 5 === 0) {
    echo "Buzz\n";
  } elseif ($counter % 3 === 0) {
    echo "Fizz\n";
  } else {
    echo $counter . "\n";
  }

  $counter++;
}

echo "\n\nend of while loop\n\n";

$output = [];
for ($i = 1; $i <= 100; $i++) {

  if ($i % 15 === 0) {
    array_push($output, "Fizzbuzz");
  } elseif ($i % 5 === 0) {
    array_push($output, "Buzz");
  } elseif ($i % 3 === 0) {
    array_push($output, "Fizz");
  } else {
    array_push($output, $i);
  }
}
//print_r($output);

foreach ($output as $entry) {
  echo $entry . "\n";
}

echo "\n\nend of foreach loop with all numbers\n\n";

foreach ($output as $entry) {
  if ($entry === "Fizz") {
    continue;
  }
  echo $entry . "\n";
}

echo "\n\n last iteration\n";

foreach ($output as $entry) {
  if ($entry === "Fizzbuzz") {
    break;
  }
  echo $entry . "\n";
}
