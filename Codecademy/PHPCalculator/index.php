<html>

<head>
  <style>
    h1 {
      color: blue;
      border-bottom: 1px grey solid;
      text-align: center
    }

    form {

      margin: 3em 3em;
    }

    .pyth {
      margin: 0 2em;
    }

    input {
      width: 50px;
      margin: 0 1em;
    }

    .calc {
      width: 100px;
    }
  </style>
</head>

<body>
  <!--Your code goes here-->
  <h1> Add two numbers </h1>
  <form method="get" action="addition.php">
    <input type="int" name="n1" /> +
    <input type="int" name="n2" />
    <input type="submit" value="Add" />
    <br>
    <h1>Divide one number by another</h1>
    <input type="int" name="d1" />
    \
    <input type="int" name="d2" />
    <input type="submit" formaction=" division.php" value="Divide" />
    <br>
  </form>

  <!--<?php print_r($_GET); ?>-->


  <br>

  <h1>Calculate the hypotenuse</h1>
  <form class="pyth" method="get" action="division.php">
    <input type="int" name="a" />
    <sup>2</sup> +
    <input type="int" name="b" />
    <sup>2</sup>
    <input class="calc" type="submit" value="Calculate" />
    <br>
  </form>
  <br>
  <a href="index.php">Reset</a>


</body>

</html>