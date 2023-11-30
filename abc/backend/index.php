<?php
$name="Rashmi KC";
echo $name ."\n";
print_r("Rashmi". "\n");
$students=array("xyz","abc");
print_r($students);
$name=true;
echo $name . "\n";
const pi="3.1415";
echo pi ."\n";
$num1=20;
$num2=10;
echo  $num1+$num2. "\n";
echo $num1-$num2. "\n";
echo $num1*$num2. "\n";
echo $num1/$num2. "\n";
echo $num1%$num2. "\n";
echo " relational operator >". $num1>$num2 ."\n";
echo " relational operator <". $num1<$num2 ."\n";
echo " relational operator =". $num1==$num2."\n";
$num1=$num2+2;
echo $num1. "\n";
echo (2<3)?"True". "\n": "False"."\n";
$i=0;
echo $i++."\n";
echo $i. "\n";
echo ++$i."\n";
// class--> Pascal Case , Function->camelCase , variable-> snake_case
function swap(&$num1,&$num2){
    $temp= $num1;
    $num1=$num2;
    $num2=$temp;
}
$num1=2;
$num2=7;
swap($$num1,$$num2);
print("num1=$num1 \nnum2=$num2");

$students = array (
    "name"=> "Rashmi",
    "Age" => 20,
);
print_r($students);
echo (pi());
define ("name", ["rashmi","alisha","priti","purnima"]);
echo name[3];



?>
