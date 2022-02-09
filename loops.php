<?php
// while loop
$num=10;   //initial counter

while ($num<=20){
    echo "nambari ni: $num<br>";
    $num++;

}
echo "<br>";
$num=10;
while ($num<=100){
    echo"the number is:$num<br>";
    $num+=5;
}
echo"<br>";
//Do while
$num1=8;
do{
    echo"the number is: $num1 <br>";
    $num1++;
}while($num1<=12);
//for loop
//initialize counter,test counter,increment/decrement counter

for($num3=20;$num3<=55;$num3+=6){
    echo"Nambari ni:$num3<br>";
}
//for each loop
$netscapeclass=array("patience","erick","dennis","laura",35,456.98,true,false);
var_dump($netscapeclass);
echo"<br>";

foreach ($netscapeclass as $darasa){
    echo"$darasa<br>";
    patience();//this is a function and they are very case sensitive
}



