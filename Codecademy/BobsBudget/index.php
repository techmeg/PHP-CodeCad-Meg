<?php

$annualExpenses = [
  "vacations" => 1000,
  "carRepairs" => 1000,
];

$monthlyExpenses = [
  "rent" => 1500,
  "utilities" => 200,
  "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
function calculateNet($segments, $i)
{
  $netSegment = $segments[$i][0] * $segments[$i][1];
  return $netSegment;
}

// calculate each after tax income segment
// sum to find netIncome
$netIncome = 0;
$netIncome += calculateNet($incomeSegments, 0);
echo $netIncome . "\n";
$netIncome += calculateNet($incomeSegments, 1);
echo $netIncome . "\n";
$netIncome += calculateNet($incomeSegments, 2);
echo $netIncome . "\n";

//find income after Soc Security
$annualIncome = $netIncome - $socialSecurity;
echo "annual income less tax and SS = $annualIncome\n";

//subtract big ticket items
$annualIncome -= $annualExpenses["vacations"] + $annualExpenses['carRepairs'];
echo "annual income less annual expenses = $annualIncome\n";


//determine monthly income before expenses
$monthlyIncome = $annualIncome / 12;
echo "Monthly income before expenses = $monthlyIncome\n";

//reduce monthly income by monthly expenses
$monthlyIncome -= ($monthlyExpenses['rent'] + $monthlyExpenses['utilities'] + $monthlyExpenses['healthInsurance']);
echo "Monthly income less expenses = $monthlyIncome\n";

//determine weekly income
$weeklyIncome = $monthlyIncome / 4.33;
echo "Weekly income before expense = $weeklyIncome\n";

//create array of weekly expenses
$weeklyExpenses = ['gas' => 25, 'food' => 90, 'entertainment' => 47,];
print_r($weeklyExpenses);

//deduct weekly expenses
$weeklyIncome -= ($weeklyExpenses['gas'] + $weeklyExpenses['food'] + $weeklyExpenses['entertainment']);
echo "Weekly Income after expenses = $weeklyIncome\n\n
";

//calculate potential annual savings
$savings = $weeklyIncome * 52;
echo "Annual savings = $" . number_format($savings, 2);
