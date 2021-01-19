<?php
$answers = [
  "It is certain",
  "It is decidedly so.",
  "Without a doubt",
  "Yes, definitely",
  "You may rely on it.",
  "As I see it, yes.",
  "Most likely.",
  "Outlook good.",
  "Yes.",
  "Signs point to yes.",
  "Reply hazy, try again.",
  "Ask again later.",
  "Better not tell you now.",
  "Cannot predict now.",
  "Concentrate and ask again.",
  "Don't count on it.",
  "My reply is no.",
  "My sources say no.",
  "Outlook not so good.",
  "Very doubtful.",
];

function magic8Ball()
{
  echo "Welcome. Please ask the Magic Ball any question that can be answered by yes or no.";
  echo "\n\n";

  $question = readline(">>");
  echo "\n";

  echo "You have asked the Magic Ball to consider: \n\n\t\"$question\".\n\n Please turn the ball over in your mind as it ponders your query.\n\n";
  echo "\n";
  echo "\n";

  $answer = rand(8, 19);
  // echo $answer;
  // echo "\n";

  global $answers;
  echo $answers[$answer];
  echo "\n";
}
magic8Ball();
