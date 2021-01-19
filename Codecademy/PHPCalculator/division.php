<html>

<body>
  <!--Your code goes here-->
  <h1>Division Results</h1>
  <?= $_GET['d1'] . " / " . $_GET['d2'] . " = " . ($_GET['d1'] / $_GET['d2']) . "\n"; ?>
  <br>
  <br>

  <h1>Hypotenuse Calculation</h1>
  <?php

  function calcPyth($a, $b)
  {
    return sqrt(($a ** 2 + $b ** 2));
  };
  //calculate hypotenuse

  $hypotenuse = calcPyth(2, 2); ?>

  <?= "The hypotenuse of " . $_GET['a'] . "<sup>2</sup> and " . $_GET['b'] . "<sup>2</sup> is " . $hypotenuse . "."; ?>

  <br>
  <br>
  <a href="index.php">Reset</a>
</body>

</html>