<?php
//   Data types

//data type string
    $string = "this is as string variable";
    echo $string;
    echo "<br>";
    var_dump($string);
    echo "<br>";

//    data type integer
    $int = 25;
    Var_dump($int);
    echo "<br>";
//    data type boolean
    $active = true;
    var_dump($active);
    echo "<br>";
//    data type array
    $array = array("eric","charles","harun","david","daniel");
    var_dump($array);

//    string inbuilt functions

echo "<br>";
$password = "1234";
echo str_repeat($password,4);
echo "<br>";
echo "<br>";
$mystring = "this is a string for testing string functions";
//function to count number of words in a string
echo "count number of words in a string: ",str_word_count($mystring);
echo "<br>";
echo "<br>";
//function to reverse a string
echo "reverse a string: ",strrev($mystring);
echo "<br>";
echo "<br>";
//function to return the position of a word in a string
echo "return the position of a word in a string: ",strpos($mystring,"for");
echo "<br>";
echo "<br>";
//function to return the length of a string
echo "return the length of a string: ",strlen($mystring);
echo "<br>";
echo "<br>";
//function to replace a word or character in a string
echo "replace a word or character in a string: ",str_replace(" ","_",$mystring);
echo "<br>";

//number inbuilt functions
echo "number inbuilt functions";
echo"<br>";
echo"<br>";
echo "check if a variable is an integer: ",is_int($int);
echo"<br>";
echo"<br>";
$float = 23.456;
echo "cast a float int integer: ",(int)$float;
echo"<br>";
echo"<br>";
$new = "30" + 40;
echo "check if a variable is a number: ",is_numeric($new);
echo"<br>";
echo"<br>";

//math function
echo "Math functions";
echo"<br>";
echo"<br>";
echo "pi function: ",pi();
echo"<br>";
echo"<br>";
echo "minimium number: ",min(-10,30,50,70,0,100);