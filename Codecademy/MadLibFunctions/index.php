<?php
/*function generateStory($singularNoun, $verb, $color, $distanceUnit) {
  $story = "\nThe $singularNoun are lovely, $color, and deep.\n
But I have promises to keep,\n
And $distanceUnit to go before I $verb,\n
And $distanceUnit to go before I $verb.\n\n";
return $story;
}


echo generateStory("cats", "run", "blue", "inches");
echo generateStory("cows", "jump", "chartreuse", "kilometers");
echo generateStory("cars", "ride", "black", "football fields");
*/

$story = "The woods are lovely, dark, and deep.\n
But I have promises to keep,\n
And miles to go before I sleep,\n
And miles to go before I sleep.\n";

echo str_replace(["woods", "dark", "sleep"], ["cats", "blue", "run"],  $story);
