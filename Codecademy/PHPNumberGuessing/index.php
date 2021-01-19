<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "We're playing a game! See if you can guess the random number between 1 and 10.\n\n";

function guessNumber()
{

  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  $play_count++;

  $randomNumber = rand(1, 10);

  echo "Ready? Make your guess!\n\n";
  $input = intval(readline(">>"));
  //echo $input;
  echo "\nOK...Round $play_count results:\n Your guess: $input. Random Number: $randomNumber. \n\n";

  //echo ($input = $randomNumber);
  //echo ($input > $randomNumber);
  //echo ($input < $randomNumber);
  switch ($input) {
    case ($input === $randomNumber):
      $correct_guesses++;
      break;
    case ($input > $randomNumber):
      $guess_high++;
      break;
    case ($input < $randomNumber):
      $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_right = ($correct_guesses / $play_count) * 100;
$percent_high = ($guess_high / $play_count) * 100;
$percent_low  = ($guess_low / $play_count) * 100;

//echo $correct_guesses . "\n";
//echo $guess_high . "\n";
//echo $guess_low . "\n";

echo "\nYou answered correctly " .  number_format($percent_right, 0) . "% of the time.\n";

if ($guess_high > $guess_low) {
  echo "\nWhen you guessed wrong you tended to guess high.\n";
} elseif ($guess_high < $guess_low) {
  echo "When you guessed wrong you tended to guess low.\n\n";
}

//echo $percent_high;
if ($percent_high > 80) {
  echo "In fact you guessed high most of the time!\n";
} else {
}

//echo $percent_low;
if ($percent_low > 80) {
  echo "In fact, you guessed low most of the time!\n";
} else {
}
