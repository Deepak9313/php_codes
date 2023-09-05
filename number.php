<?php
// php have build in automatic type conversion
$num = 32;
echo is_int($num); // return 1 if num is integar
$float = 34.7;
echo "<br>".is_float($float)."<br>";
$num1 = 1;
$num2 = 0;
$res = $num1 * $num2;
echo "<br>The results of number is ".$res." means finite".is_finite($res);
echo "<br>The results of number is means infinite".is_infinite(1.9e411);
$nan = acos(8); // not a number
var_dump($nan);
$num3 = "56"; // this declare is a string
echo "<br>".is_numeric($num3)."<br>";
// type conversion
$res2 = (int)$num3;
var_dump($res2);
?>