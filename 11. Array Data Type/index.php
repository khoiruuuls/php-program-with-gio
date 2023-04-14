<?php

// Array Data Type 

$programmingLanguage1 = "PHP";
$programmingLanguage2 = "Java";
$programmingLanguage3 = "Python";

// we can simplify the variable using array
// arrays are just a list of values where those values can 
// be of multiple data types so lets refactor this into an array

$programmingLanguages = ['PHP', 'Java', 'Python'];

print_r($programmingLanguages);
echo "<br>" ."<br>"; 
echo $programmingLanguages[0];
echo "<br>"; 

// error of array
echo $programmingLanguages[-1];
echo "<br>"; 
// array cant get negative index like string
echo $programmingLanguages[3];
echo "<br>"; 
// array cant get undefined index

// to check the array are exist we can use
var_dump(isset($programmingLanguages[3]));
// it will print false because the index 3 for this array are not defined

// we can change the value of array
$programmingLanguages[0] = 'C++';
echo "<br>" ."<br>"; 
echo '<pre>';
    print_r($programmingLanguages);
echo '<pre>';
// array with index 0 has change value to C++

// to count the number of array
echo "The number of array is = " . count($programmingLanguages);
echo "<br>"; 

// we can add an array 
array_push($programmingLanguages, 'GO', 'C'); // using array_push
$programmingLanguages[] = 'Javascript';       // add value in the end of array
echo "<br>" ."<br>"; 
echo '<pre>';
    print_r($programmingLanguages);
echo '<pre>';
// array with index 0 has change value to C++

// to count the number of array
echo "The number of array is = " . count($programmingLanguages);
echo "<br>" ."<br>"; 

// we can be able to define your own key, so lets refactor 
// the above array to contain custom keys 
// array can include all data type 

$programmingLanguages = [
    'php' => [
        'creator'       => 'Rasmus Lerdorf',
        'isOpenSource'  => true,
        'versions'      => [
            ['version'  => 8  , 'releaseDate' => 'Nov 12, 2012'],
            ['version'  => 7.9, 'releaseDate' => 'Des 12, 2012'],
        ],
    ],
    'python' => "100"
];

// add value into array like before
$newLanguage = 'C#';
$programmingLanguages[$newLanguage] = '90';

echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

echo "The value of a {$newLanguage} in array is = {$programmingLanguages[$newLanguage]}";
echo "<br>" ."<br>"; 

// get data from multi dimensional array 

echo "the creator is {$programmingLanguages['php']['creator']}";

// duplicate key in array 
echo "<br>" ."<br>";
$array = [
    true => 'a',
    1    => 'b',
    '1'  => 'c',
    1.7  => 'd',
    null => 'e'
];
print_r($array);
echo "<br>"; 

echo $array[null];

// it will print the last one 



echo "<br>" ."<br>"; 


// some element when there is no key php will automatically 
// assign the integer key, which is just an increment of the largest
// previous integer key and if there was no previous integer key 
// check this out 

$array = [
    'a',
    'b',
    50 => 'c',
    'd',
    'e'
];

print_r($array);
echo "<br>" ."<br>"; 


// removing an array from the end using array_pop
echo array_pop($array);
echo "<br>" ."<br>"; 
print_r($array);
echo "<br>" ."<br>"; 


// removing array and keep index 
// we are going to delete array with index 50 has value c
unset($array[50]);
print_r($array);
echo "<br>"; 

// removing an array from the beginning and the array will reindex 
echo array_shift($array);
echo "<br>" ."<br>"; 
print_r($array);
echo "<br>" ."<br>"; 

// lets talk about casting
$name = ['a' => 7, 'b' => null];

var_dump((array) $name);
echo "<br>" ."<br>"; 

// doesnt exist

var_dump(array_key_exists('a', $name));
var_dump(isset($name['a']));
echo "<br>" ."<br>"; 


// have same output, bool(true)
// but, what different ?
// the different is about null value
// isset function just get b as null and set it to false

var_dump(array_key_exists('b', $name));
var_dump(isset($name['b']));



