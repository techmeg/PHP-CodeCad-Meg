<?php

function pickMushrooms()
{
  // Write your code here:
  global $location, $has_mushrooms, $wearing_glasses;

  if ($location !== "woods") {
    echo "There aren't any mushrooms to pick!\n";
  } elseif ($wearing_glasses) {
    echo "You can't see any mushrooms because of the rain on your glasses.";
  } else {
    echo "You've picked some mushrooms.\n";
    $has_mushrooms = TRUE;
  }
}
