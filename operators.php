<?php
$num=100;
$string="100";
echo "comparison operators";
echo "<br> equal to operator ";
//equal to operator
var_dump($num==$string);
echo "<br> identical to operator ";
//identical equal to operator
var_dump($num===$string);
echo "<br> not equal to operator ";
//not equal to operator
var_dump($num!=$string);
echo "<br>";
var_dump($num<>$string);
echo "<br> not identical to operator ";
//not identical to operator
var_dump($num!==$string);
echo "<br> greater than operator ";
//greater than operator
var_dump($num>$string);
echo "<br> less than operator ";
//less than operator
var_dump($num<$string);
echo "<br>greater than or equal to operator  ";
//greater than or equal to operator
var_dump($num>=$string);
echo "<br> less than or equal to operator ";
//less than or equal to operator
var_dump($num<=$string);
echo "<br>";
echo "<hr>";
echo "Increment and Decrement operator";
echo "<br> pre-increment operator ";
//pre-increment operator
echo ++$num;
echo "<br> post-increment operator ";
//post-increment operator
echo $num++;
echo "<br> pre-decrement operator ";
//pre-decrement operator
echo --$num;
echo "<br> post-decrement operator ";
//post-decrement operator
echo $num--;
echo "<br>";