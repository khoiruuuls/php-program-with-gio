<?php

// Data Types and Type Casting 

# 4 Scalar Types 
    # bool                       - true or false
    $completed = true;
    # int                        - 1  , 2  , 0     , -5 ( no decimal )
    $score = 90;
    # float                      - 1.5, 0.1, 0.0004, -15.6
    $temp = 1.9;
    # string                     - "Khoirul", "Fauzan"
    $greeting = "Hello Khoirul";
    
    echo " -------------------------- ";
    echo "<br>";
    echo "           Echo Data        ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";



    echo $completed          . '<br>' . '<br>';
    echo $score              . '<br>' . '<br>';
    echo $temp               . '<br>' . '<br>';
    echo $greeting           . '<br>' . '<br>';

    echo " -------------------------- ";
    echo "<br>";
    echo "           Get Type         ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";

    echo gettype($completed) . '<br>' . '<br>';    //get type of data ( boolean )
    echo gettype($score)     . '<br>' . '<br>';    //get type of data ( int )
    echo gettype($temp)      . '<br>' . '<br>';    //get type of data ( float )
    echo gettype($greeting)  . '<br>' . '<br>';    //get type of data ( string )

# 4 Compound Types
    # array     - list of items

    echo " -------------------------- ";
    echo "<br>";
    echo "          Arrays Data       ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";
    
    $companies = [1, 2, 3, 0.5, 'A', true];
    print_r($companies);
    
    # three compound will be detailed for next
    # object
    # callable
    # iterable
    
    echo "<br>" . "<br>";
    
# 2 Special Types

    echo " -------------------------- ";
    echo "<br>";
    echo "           Echo Data        ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";

    # resource will be detailed for next
    # null it just simply means no value or nothing
    $price = null ;
    var_dump($price);

    # var_dump to get type of data
    
    echo "<br>" . "<br>";
    echo " -------------------------- ";
    echo "<br>";
    echo "          Var Dump          ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";

    var_dump($completed)     ;
    echo "<br>" . "<br>";
    var_dump($score)         ;
    echo "<br>" . "<br>";
    var_dump($temp)          ;
    echo "<br>" . "<br>";
    var_dump($greeting)      ;
    echo "<br>" . "<br>";

    
    echo " -------------------------- ";
    echo "<br>";
    echo "        Type Hinting        ";
    echo "<br>";
    echo " -------------------------- ";
    echo "<br>" . "<br>";

    function sum($x, $y) {
        var_dump($x, $y);
        echo "<br>" . "<br>";
        return $x + $y;
    }

    echo sum(3, 6);

    # it will print 9 as data type int

