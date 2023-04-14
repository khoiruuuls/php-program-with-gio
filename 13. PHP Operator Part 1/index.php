<?php

//  Operators ( + - * / % ** )

    $x = -8;
    $y = 3;

    var_dump($x + $y);              // do the addition function
    echo "<br>"; 
    var_dump($x - $y);              // do the reduction function
    echo "<br>"; 
    var_dump($x * $y);              // do the multiplication function
    echo "<br>"; 
    var_dump($x / $y);              // do the distribution function
    echo "<br>"; 
    var_dump($x % $y);              // do the modulo function 
    echo "<br>"; 
    var_dump($x ** $y);             // do the exponetial function which just takes x to the power of y
    echo "<br>" ."<br>"; 

//  Assignment Operators ( = += -= *= /= %= **= )

    $assignmentOperator = 4;
    // $assignmentOperator += 4 ;    // instead like 4 + 4 
    // $assignmentOperator -= 4 ;    // instead like 4 - 4  
    // $assignmentOperator *= 4 ;    // instead like 4 * 4  
    // $assignmentOperator /= 4 ;    // instead like 4 / 4 
    // $assignmentOperator %= 4 ;    // instead like 4 % 4 
    // $assignmentOperator **=4 ;    // instead like 4 ^ 4 

    echo $assignmentOperator;
    echo "<br>" ."<br>"; 

    // String Operators ( . .= )

    $word = 'Hello';
    // $word = $word . ' Wolrd !';  // or 
    $word .= ' World !'; 

    echo $word;
    echo "<br>" ."<br>"; 

// Comparison Operators ( == === != <> !== < > <= >= <=> ?? ?: )

    $x = 5;                         // data type int
    $y = '5';                       // data type string

    var_dump($x == $y);             // called loose comparison to check the same value
    echo "<br>" ."<br>"; 
    var_dump($x === $y);            // called strict comparison to check with data type
    echo "<br>" ."<br>"; 
    var_dump($x != $y);             // check that the data value wasn't equals in this case will false because the value was same
    echo "<br>" ."<br>"; 
    var_dump($x <> $y);             // check the data was loose inequality has the same like != comparison
    echo "<br>" ."<br>"; 
    var_dump($x !== $y);            // check that the data type was not equals in this case will true because the data type was different
    echo "<br>" ."<br>"; 
    var_dump($x < $y);              // check the value of $x is less than $y
    echo "<br>" ."<br>"; 
    var_dump($x > $y);              // check the value of $x is greater than $y
    echo "<br>" ."<br>"; 
    var_dump($x <= $y);             // check the value of $x is less than equals to $y
    echo "<br>" ."<br>"; 
    var_dump($x >= $y);             // check the value of $x is greater than equals to $y
    echo "<br>" ."<br>"; 
    var_dump($x <=> $y);            // it will return -1 if $x less than $y and will return 1 if $y less than $x and if equals will return 0 value
    echo "<br>" ."<br>";

    /*  before PHP 8 when string was compared to a number 
        the string was converted to number before the comparison
        and then it was compared. so for example : */
        
        var_dump(0 == 'hello');
        echo "<br>" ."<br>"; 

    /*  the string 'hello' will converted to number and 
        when this was converted to number it would result in 0
        and therefore 0 equals 0 would return true 
        but ! in PHP 8 the string 'hello' is no longer converted to number
        instead what happens is that when the string is not numeric 
        the other side will be converted to string 
        and then a string comparison will happen, so for example :
        in this case, in PHP 8 : 
        0 get converted to string and then just the regular string comparison happens
        and 0 does not equal to hello and therefore it return false
        so, if we refresh the page it will display false */
            
        // var_dump(0 == '0'); // this code will return true hahaha

    /*  so, in general we use strict type and strict comparisons so highly 
        recommend using strict comparison when possible to avoid potential issues
        let me show you an example where strict comparison would be very important : */

        $x = 'hello';
        $y = strpos($x, 'o');

        if ($y === false) {
            echo 'not found';
        } else {
            echo 'found at index ' . $y;
        }
        echo "<br>" ."<br>"; 

    /*  instead using that function, we can use conditional operators 
        called ternary operator ( ?: ) */

        $result = $y === false ? 'not found' : 'found at index ' . $y;
        echo $result;
        echo "<br>" ."<br>"; 
        
        // null coalescing operator
        
        $x = null; 
        // $x = 30;         // if this variable was active the value of $y is 30
        $y = $x ??'hello';
        // $y = $x <- 'the default of coalescing operator is null' ??'hello';
        var_dump($y);       // it will print hello as a string data type
        
// Error Control Operators ( @ )

    $files = @file('foo.txt');

    echo @$undefined;
    echo "<br>" ."<br>"; 

/*  but, i do not recommend using this operator at all
    unless you have really really good case for it 
    in some cases maybe you want to surprise some API calls
    or something but, i still don't recommend using this operator
    because it simply silences your application 
    it does not solve any issue
    it does not fix your problems 
    and you may not be aware that your application has these errors 
    because you were suppressing it. */

// Increament/Decrement Operators (++ and --)

    /*  only affect number and string data type
        array, booleans, resources and objects are not affected */

    $w = 's';
    $x = 15;
    $y = 30;
    $z = 'u';

    echo $w++ . " " . $w;
    echo "<br>" ."<br>"; 
    echo $x-- . " " . $x;
    echo "<br>" ."<br>"; 
    echo ++$y . " " . $y;
    echo "<br>" ."<br>"; 
    echo --$z . " " . $z;
    echo "<br>" ."<br>"; 
    
    // Logical Operators ( && || ! <--- different ---> and or xor )
    
    // just to note : that could be other data type
    
    // and operator ( && ) 
    
        $x = true;
        $y = true;
        
        var_dump($x && $y); // if we want true result, both of them must be true
        echo "<br>" ."<br>"; 

    // or operator ( || ) 
    
        $x = false;
        $y = true;

        var_dump($x || $y); // if we want true result, either of $x or $ evaluates to true
        echo "<br>" ."<br>"; 

    // unary operator ( ! ) 
    
        $x = true;

        var_dump(!$x); // it just a negation so value ' $x = true ' will print as false
        echo "<br>" ."<br>"; 

    // and or xor will detailed in the next video. stay tuned boy !

// Bitwise Operators ( & | ^ ~ << >> )

    // & (and) operator, it will return bits that are set in both $x and $y
    $x = 6;
    $y = 3;

    var_dump($x & $y); // it equal to int(2) 
    echo "<br>" ."<br>"; 

    /*  lets analyze what we're getting two !
        the binary representation of the number 6 is 110
        and the binary number 3 is 011 
        
        1 1 0   equal 6
          &
        0 1 1   equal 3
        -----
        0 1 0   equal 2
        
        thats why we are getting the value of 2
    */

    // | (or) operator, it will return bits that are set in either $x or $y
    $x = 6;
    $y = 3;

    var_dump($x & $y); // it equal to int(7) 
    echo "<br>" ."<br>"; 

    /*  lets analyze what we're getting two !
        the binary representation of the number 6 is 110
        and the binary number 3 is 011 
        
        1 1 0   equal 6
          |
        0 1 1   equal 3
        -----
        1 1 1   equal 7
        
        thats why we are getting the value of 7
    */

    // ^ (zoro) operator, will basically return bits that are set in either x or y 
    // but that are not set in both
    $x = 6;
    $y = 3;

    var_dump($x ^ $y); // it equal to int(5) 
    echo "<br>" ."<br>"; 

    /*  lets analyze what we're getting two !
        the binary representation of the number 6 is 110
        and the binary number 3 is 011 
        
        1 1 0   equal 6
          ^
        0 1 1   equal 3
        -----
        1 0 1   equal 5
        
        thats why we are getting the value of 5
    */

// Array Operators ( + == === =/ <> ===/ )
// Execution Operators ( `` )
// Type Operators ( instanceof )
// Nullsafe Operators - PHP8 ( ? )

