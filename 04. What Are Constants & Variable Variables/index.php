<?php

// constans

echo "Hello, my name is Constans ! :)";

echo "<br>";
echo "<br>";

$firstName = "Aliyyu";

$firstName = "Gani";

echo $firstName;

/* It will print Gani.
because PHP executed by top to bottom line by line,
so it first reads Aliyyu and assigns the value to $firstName
and than it reassigns the first name to Gani */

echo "<br>";
echo "<br>";

define('STATUS_PAID', 'PAID');

echo STATUS_PAID;

echo "<br>";
echo "<br>";

echo defined('STATUS_PAID'); //as boolean

echo "<br>";
echo "<br>";

const STATUS_PEMBAYARAN = 'SUDAH BAYAR';

echo STATUS_PEMBAYARAN;

echo "<br>";
echo "<br>";

$blokir = 'BLOKIR';

define('STATUS_' . $blokir, 'TERBLOKIR');  //constant with variable
echo STATUS_BLOKIR;





// for your information

echo "<br>";
echo "<br>";

echo PHP_VERSION; // show the current version of php we are using ( 8.2.0 )

echo "<br>";
echo "<br>";

echo __LINE__; // show the current line ( show 62 ) 

echo "<br>";
echo "<br>";

echo __FILE__; // show directory we are using now



// Variable variables

echo "<br>";
echo "<br>";

$foo  = 'bar';

$$foo = 'baz'; // $$foo is a variable varibles

// for instead $$foo = $bar and $bar = baz

echo $foo , $bar;

echo "<br>";
echo "<br>";

echo $foo, $$foo;

echo "<br>";
echo "<br>";

echo "$foo, {$$foo}";

echo "<br>";
echo "<br>";

echo "$foo, ${$foo}";
