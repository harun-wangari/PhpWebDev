<?php
//while loop
$i=0;
while ($i<10){
    $j=0;
    while ($j<=$i){
        echo "*         ";
        $j++;
    }
    echo"<br>";
    $i++;
}

$i=3;

//do .. while loop
do{
    echo "enter ur password,attemps remains $i<br>";
    echo "wrong password try again <br>";
    $i--;
}while($i>=1);