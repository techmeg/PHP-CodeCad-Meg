<?php
// Change player location
function changeLocation()
{
  // Write your code here:
  global $location;

  //print command & get input
  echo "Where do you want to go?\n";
  $new_location = readline(">>");
  $new_location = strtolower($new_location);

  //go from the kitchen to bathroom or woods

  if ($location === "kitchen" && $new_location === "bathroom") {
    $location = "bathroom";
    echo "You go to: bathroom.\n";
  } elseif ($location === "kitchen" && strstr($new_location, "woods")) {
    $location = "woods";
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
  }

  //go from bathroom to kitchen, but not to the woods
  elseif ($location === "bathroom" && strstr($new_location, "kitchen")) {
    $location = "kitchen";
    echo "You go to: kitchen.\n";
  }

  //go from woods to kitchen, but not to the bathroom  
  elseif ($location === "woods" && strstr($new_location, "kitchen")) {
    $location = "kitchen";
    echo "You go to: kitchen.\n";
  } elseif (($location === "woods" && (strstr($new_location, "bathroom"))) || ($location === "bathroom" && (strstr($new_location, "woods")))) {
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }

  //if going anywhere other than these three rooms, you are lost.
  else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}
