<?php

include_once('./citymap.php');

$cityMap1 = ["Punjab" => ['malerkotla', 'jal', 'moga'], 'Himachal' => ['gagret', 'una', 'hamirpur'], "haryana" => []];

$cityMap2 = ["Delhi" => ['Dwarka', 'Rohini', 'Khan Market', 'safdarganj']];

var_dump(printCities($cityMap1));
echo "</br>";
printCities($cityMap2);
echo "</br>";
$sum = sumNumber(8,9);
echo $sum;
	