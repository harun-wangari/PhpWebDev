<?php
//user defined function

function add(){ //function definition
    $num1=20;
    $num2=30;
    return $num1+$num2;
}

echo add(); //calling a function
echo "<br>";

//inbuilt function

echo pi();
echo "<br>";

//defining function with arguments

function product($num1,$num2){
    return $num1*$num2;
}
echo product(20,5);
echo "<br>";
echo "<hr>";

//function with three arguments
echo "<h2>Car function</h2>";
function car($model,$year,$new){ //function definition
    echo "Car model: $model<br>Year: $year<br>New: $new<br><br>";
}

car("Toyota primio",2007,true);
car("Fond ranger", 2017,false);