<?php
$classes=array('php','java','c++','python','pascal','javascript');

var_dump($classes);
echo "<br> $classes[3]<br>";

foreach($classes as $class){
    echo "$class<br>";
}

//associative array
echo '<hr>';
echo 'Associative Array<br>';
$student=array('name'=>'John Waweru','age'=>'25','course'=>'information technology','admno'=>'dct1601');
echo "$student[name]";