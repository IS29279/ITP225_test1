<?php

$num1 = readline("Enter in the first number: ");
$num2 = readline("Enter in the second number: ");
$num3 = readline("Enter in the third number: ");
$num4 = readline("Enter in the fourth number: ");

$ans = $num1 + $num2 - $num3 * $num4;
echo "Your answer is " . $ans;
echo "\n";
$ans = $num2 + $num3 - $num4 / $num1;
echo "Your answer is " . $ans;
echo "\n";
$ans = $num3 + $num4 * $num1 / $num2;
echo "Your answer is " . $ans;
echo "\n";
$ans = $num4 - $num1 * $num2 + $num3;
echo "Your answer is " . $ans;
echo "\n";
$ans = $num1 - $num2 * $num3 / $num4;
echo "Your answer is " . $ans;



?>