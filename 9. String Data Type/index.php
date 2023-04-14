<?php

// STRING DATA TYPE 

$firstName = 'Khoirul';

// double quotes can include variable 
$fullName  = "$firstName Fahmi";
// the variation of variable include is
// $fullName  = "${firstName} Fahmi";
// $fullName  = "{$firstName} Fahmi";

echo $firstName;
echo "<br>" ."<br>"; 
echo $fullName;
echo "<br>" ."<br>"; 

$firstItem = 'Chicken';
$secondItem = 'Nugget';

$completeItem = $firstItem . " " . $secondItem;

echo $completeItem;
echo "<br>" ."<br>"; 

// semi array in string data type
echo $completeItem[0];
// it will print C from $completeItem and 
echo "<br>" ."<br>"; 
echo $completeItem[-1];
// it will print t from back of $completeItem as 
// Chicken Nugget
echo "<br>" ."<br>"; 

// and we can change and add the array value of string using 
$completeItem[15] = 'O';
echo $completeItem;
echo "<br>" ."<br>"; 
// the string have to change 

var_dump($completeItem);

// Heredoc
echo "<br>" ."<br>"; 
$text = <<<TEXT
Hello
World
I am $fullName
TEXT;
echo $text;
echo "<br>" ."<br>";
// if you want the text have a new line 
echo  nl2br($text);
echo "<br>" ."<br>"; 

$html = <<<TEXT
<div> 
    <p>It is HTML<p>
</div>
TEXT;
echo $html;

// Nowdoc
echo "<br>" ."<br>"; 
$text = <<< 'TEXT'
Hello
World
I am $fullName
TEXT;
echo $text;
echo "<br>" ."<br>";
// if you want the text have a new line 
echo  nl2br($text);
echo "<br>" ."<br>";

