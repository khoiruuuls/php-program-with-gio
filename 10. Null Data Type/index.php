<?php

// Null Data Type

// Null is a special data type that represents a variable
// with no value, a variable can be a null if its assigned 
// the constant null it has not been defined yet or it has been unset 
// Lets go over all the three options !

echo "1. Null Constant";
echo "<br>" ."<br>"; 


$x = null;
echo $x;
// it will display nothing, we can use var_dump to ensure that is a null value
var_dump($x);
// the screen display NULL, to check if a variable is actually null 
// we can use is_null function
echo "<br>" ."<br>"; 
var_dump(is_null($x));
echo "<br>" ."<br>"; 

echo "2. Undefined";
echo "<br>" ."<br>"; 

var_dump($y);
echo "<br>";
// if we refresh the page we do get this warning
// because the variable y has not defined
//  and the value is equals to null
var_dump(is_null($y));
echo "<br>" ."<br>"; 

echo "3. Unset";
echo "<br>"; 

$z = 940;
echo "<br>";
var_dump($z);
unset($z);
// after using unset the value of $z is going to be null
echo "<br>";
var_dump($z);
echo "<br>" . "<br>";


echo "Casting"; 
echo "<br>" ."<br>"; 

$variable = null;

var_dump((string) $variable);
echo "<br>" . "<br>";
var_dump((int) $variable);
echo "<br>" . "<br>";
var_dump((bool) $variable);
echo "<br>" . "<br>";
var_dump((array) $variable);
echo "<br>" . "<br>";

// if you dont know a value of a variable you could assign a 
// default value of null and then later within a control 
// structure you could assign the actual value to it there 
// are more use cases like within clases and functions 
// as return and argument types.