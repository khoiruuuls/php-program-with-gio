<?php

// Floats Data Type

$x = 13_000.5;
$y = 7.9e3;
$z = 8.4e-3;

var_dump($x);
echo "= " . $x;
echo "<br>". "<br>";
var_dump($y);
echo "= " . $y;
echo "<br>". "<br>";
var_dump($z);
echo "= " . $z;
echo "<br>". "<br>";

// get minimum and maximum value pof floats
echo "Minimun value of float is " . PHP_FLOAT_MIN; 
echo "<br>". "<br>";
echo "Maximum value of float is " . PHP_FLOAT_MAX; 
echo "<br>". "<br>";

// operation of float floor in php
$floorOperation = floor((0.1 + 0.7) * 10);
echo $floorOperation;
// it will return 8 ? because 0.1 + 0.7 thats 0.8 
// and then times 10 which is will return 8 BUT !
// it will print 7 ?!, the reason for that is 
// because 0.1 or 0.7 dont exactly have an exact representation 
// as the floating number in base two which is binary 
// and binary is used internally to store the floating numbers
// and therefore when converting this into a binary internally 
// it loses some of the precision and in this case
// the $floatOperation actually equals to 7.9999999999999991118
// floor function basically just rounds all the numbers down
// and in this case when appying floor to this number it just removes
// decimals number and we're left with 7 thats why it prints 7.
echo "<br>". "<br>";

// operation of float ceil in php
$ceilOperation = ceil((0.1 + 0.7) * 10);
echo $ceilOperation;
// as a simple, ceil function is opposite of floor operation
// so, it will print 8
// BUT ! 
// if you have a function like 
// $ceilOperation = ceil((0.1 + 0.2) * 10);
// it will print 4 !
// because ceil function have value of 
// 0.3000000000000004 when apply ceiling to this,
// the number it rounds up to the four and not to the three 
// because you have this last decimal here thats four if this 
// was zero then this would not get rounded up to four just remain three
// so basically never trust the floating numbers to the last digit 
// and never compare floating numbers directly for equality 
// check this out : https://floating-point-gui.de/   
echo "<br>". "<br>";

// lets get some function 
$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y);

echo "<br>". "<br>";

if ($x == $y){
    echo "Yes";
}else {
    echo "No";
}
echo "<br>". "<br>";
// $x and $y does not the same number 

// NAN is the NOT A NUMBER and INF is INFINITY
echo NAN;
echo "<br>". "<br>";
echo log(-1); 
echo "<br>". "<br>";
echo INF;
echo "<br>". "<br>";
echo PHP_FLOAT_MAX * 2;






