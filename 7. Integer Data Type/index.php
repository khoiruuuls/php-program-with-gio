<?php

// Integers Data Types

// echo PHP_INT_MAX; is the max nuber of integers
// what if 
// echo PHP_INT_MAX + 1; it will be a float data type

// Example 

$w = 9;             // base ten number will display 9
$x = 0x5A;          // as hexadecimal number will display 90
$y = 055;           // as octal number will display 45
$z = 0b111;         // as binary number will display 7

echo $w;
echo "<br>" . "<br>";
echo $x;
echo "<br>" . "<br>";
echo $y;
echo "<br>" . "<br>";
echo $z;

echo "<br>" . "<br>";

$isInteger = 3_000_000 ;

var_dump($isInteger);
echo "<br>" . "<br>";

var_dump(is_int($isInteger));