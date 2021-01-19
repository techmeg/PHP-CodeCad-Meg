<h1>Welcome to the Repetitive Cafe</h1>

<?php
$drinks = [
  "Martini" => 12,
  "Highball" => 8,
  "Cosmopolitan" => 10,
  "Beer" => 5,
];

$pastries = ["Bagel", "English Muffin", "Toast"];

$food = ["Baba Ganoush", "Hummus", "Olive Mix"];
?>

<h3>Drinks!</h3>
<ul>
  <?php foreach ($drinks as $drink => $price) : ?>
    <li><?= "$drink . . . $$price" ?></li>
  <?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>

<ul>
  <?php for ($i = 0; $i < count($pastries); $i++) : ?>
    <li><?= $pastries[$i] ?></li>
  <?php endfor; ?>
</ul>

<h3>Small plates ($8 each)</h3>

<ul>
  <?php
  $i = 0;
  while ($i < count($food)) : ?>
    <li><?= $food[$i] ?></li>
  <?php
    $i++;
  endwhile; ?>
</ul>