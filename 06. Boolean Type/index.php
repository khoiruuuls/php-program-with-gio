<?php

/* ----------- BOOLEAN ----------- */

// a simple representation a truth value,
// it can be true or false 

$isComplete = false;

/*
    integer 0 and -0            = false
    float 0.0 and -0.0          = false
    string ''                   = false
    string with zero value'0'   = false
    array []                    = false
    null                        = false
*/

/*

How to print boolean ?

    $isComplete = true;

    echo $isComplete;

will display 1 

and if we are set $isComplete = false, 
and we do echo for this function like before
it will print nothing

why ? there because when you're printing something
on php, you will try to cast it into a string 

    change $isComplete = (string) true or false
    var_dump($isComplete);
    to check that is a string 

*/

if ($isComplete) {
    // do something 
    // if isComplete equals true will print success
    echo 'success';
}
else {
    // do something else
    // if isComplete equals false will print fail
    echo 'fail';
}

echo "<br>" . "<br>";

// and how to check the data boolean ?
// use is_bool function to check it !

var_dump(is_bool($isComplete));