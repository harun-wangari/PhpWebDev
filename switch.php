<?php
 $color="green";
 echo "<h2>Heading color<h2>";
 echo"<hr>";
 switch ($color){
     case "white":
         echo "<h3 style='color:$color;background-color: black;'>Color $color</h3>";
         echo"<br>";
         break;
     case "red":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     case "chocolate":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     case "blue":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     case "green":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     case "brown":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     case "yellow":
         echo "<h3 style='color:$color;'>Color $color</h3>";
         echo"<br>";
         break;
     default:
         echo "<h3 style='color:$color;'>color not recognised,Default Color black</h3>";
         echo"<br>";
 }