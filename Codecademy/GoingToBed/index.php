<?php

//create a string utility

class StringUtilities
{
  static function secondCase($word)
  {
    if (strlen($word) < 2) {
      return strtolower($word);
    } else {
      $word = strtolower($word);
      $word[1] = strtoupper($word[1]);
      return $word;
    }
  }
}

// create Pajama class
class Pajamas
{
  private $owner, $fit, $color;
  function __construct(
    $owner = "Meg",
    $fit = "short",
    $color = "blue"
  ) {
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  function describe()
  {
    return "$this->owner made these pajamas $this->fit and $this->color.\n";
  }

  function setFit($fit)
  {
    if (in_array($fit, ["tight", "fine", "loose"])) {
      $this->fit = $fit;
    } else {
      echo "**Fit must be 'tight', 'fine', or 'loose'.\n";
    }
  }

  function getColor()
  {
    return $this->color;
  }

  function setColor($color)
  {
    $this->color = $color;
  }
}
//instantiate a Pajama object

$chicken_pjs = new Pajamas("CHICKEN", "long", "black");

//echo StringUtilities::secondCase("CHICKEN")  . "\n";
echo $chicken_pjs->describe();
$chicken_pjs->setFit("perfect");
echo $chicken_pjs->describe();

//extend Pajama class

class ButtonablePajamas extends Pajamas
{
  private $button_state = "unbuttoned";

  //override describe method
  function describe()
  {
    return parent::describe() .  "The buttons are $this->button_state.\n";
  }
  function toggleButtons()
  {
    if ($this->button_state === "unbuttoned") {
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";
    }
  }
}

//instantiate ButtonablePajama object

$moose_PJs = new ButtonablePajamas("moose", "loose", "brown");
echo $moose_PJs->describe();
$moose_PJs->toggleButtons();
echo $moose_PJs->describe();

//extend Pajama class
class HattedPajamas extends Pajamas
{
  private $style = "floppy";
  function setStyle($style)
  {
    $this->style = $style;
  }
  function describe()
  {
    return parent::describe() . "The matching hat is $this->style.\n";
  }
}

$pigs_pjs = new HattedPajamas();
echo $pigs_pjs->describe();
$pigs_pjs->setStyle("enormous");
$pigs_pjs->setFit("tight");
echo $pigs_pjs->describe();

//test color getter and setter
echo $pigs_pjs->getColor() . "\n";
$pigs_pjs->setColor("puce");
echo $pigs_pjs->getColor() . "\n";
