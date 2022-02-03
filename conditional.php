<?php
//if statement
$num=37;
if($num>30){
    echo "the answer is true";
    echo"<br>";
}

//if...else statement
if($num>40){
    echo "the answer is true";
    echo"<br>";
}else{
    echo "the answer is false";
}
//$time = date("H");
//echo "<br>";
//echo $time;
//echo "<br>";
//if($time<12){
//    echo"morning";
//}elseif($time<17){
//    echo"afternoon";
//}elseif($time<20){
//    echo"evening";
//}else{
//    echo"night";
//}
echo "<hr>";
$grade = 00;
echo "<br>";
echo "your grade : $grade";
echo "<br>";
if($grade>80 && $grade<=100){
    echo"Distinction";
}elseif($grade>60 && $grade<=80){
    echo"Credit";
}elseif($grade>40 && $grade<=60){
    echo"Pass";
}elseif($grade>=0 && $grade<=40){
    echo"Fail";
}else{
    echo"invalid grades";
}