<?php

    // Basic echo function 

    echo 'Hello World !';
    
    echo "<br>";
    echo "<br>";

    echo print 'Hello World !'; 
    
    echo "<br>";
    echo "<br>";

    print ('Hello World !');
    
    echo "<br>";
    echo "<br>";
    
    echo 'Hello', ' ', 'World !';
    
    echo "<br>";
    echo "<br>";

    echo 'Khoirul\'s';

    echo "<br>";
    echo "<br>";

    echo "Khoirul's Invoice";

    echo "<br>";
    echo "<br>";

    // with variable 
    // and you cannot start variable with number : $3name
    // but you can start using underscore than number : $_3name 

    $name = "Khoirul";
    echo $name;

    echo "<br>";
    echo "<br>";

    $x = 1;
    $y = $x;

    $x = 3;
    echo $y;  
    
    // it will print 1, because $y = 1 
    // before $x was changed to 3

    echo "<br>";
    echo "<br>";

    // but, if you want to make it change
    // for every $x is, you can add '&' such as:
    
    $a = 1;
    $b = &$a;

    $a = 3;
    echo $b;  

    echo "<br>";
    echo "<br>";

    // echo string with variable

    $firstName = "Aliyyu";

    echo "Hello $firstName";
    
    echo "<br>";
    echo "<br>";

    echo "Hello {$firstName}";

    echo "<br>";
    echo "<br>";

    echo "Hello " . $firstName;

