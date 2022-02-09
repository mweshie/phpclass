<?php
$fruits=array("mangoes","bananas","watermelon","ovacado","Apples");
echo $fruits[0];
echo"<br>";
echo $fruits[3];
echo"<br>";
//when you want to equate//like you want to replace an element in an array with another element
$fruits[4]="pineapple";
echo $fruits[4];
echo"<br>";
echo count($fruits);
echo"<br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";