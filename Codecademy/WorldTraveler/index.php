<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "We started out with $riel riel, $kyat kyat, $krones krones and $lek lek.";

  echo "\n";

  $exchRiel = .00025;
  $exchKyat = .00076;
  $exchKrones = .11;
  $exchLek = .0097;

  $riel2doll = $riel * $exchRiel;
  $kyat2doll = $kyat * $exchKyat;
  $krones2doll =  $krones * $exchKrones;
  $lek2doll =  $lek * $exchLek;
  echo "\n";

$totalDollars = number_format(($riel2doll + $kyat2doll + $krones2doll + $lek2doll - 1), 2);
/*echo $totalDollars;
  echo "\n";

$dollars = $totalDollars % 1000;
echo $dollars;
  echo "\n";

$change = $totalDollars - $dollars;
echo $change;
  echo "\n";

$cents = $change * 100;
echo $cents;
  echo "\n";

$cents %= 100;
echo $cents;
  echo "\n";
$cents /= 100;
echo $cents;
  echo "\n";
$totalDollars = $dollars + $cents;
echo $totalDollars;
  echo "\n";
*/
echo "We brought back \${$totalDollars} in foreign currency.";
