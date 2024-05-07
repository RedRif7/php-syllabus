<?php
$lowerBound = 1;
$upperBound = 100;

$numbers = range($lowerBound,$upperBound);

$sum = array_sum($numbers);
$average = $sum / count($numbers);

echo "The sum of $lowerBound to $upperBound is $sum \n";
echo "The average is $average \n";
