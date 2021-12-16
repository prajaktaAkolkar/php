<?php

//While loop
$i = 0;
$x = 5;
while($i <16 && $x <10)
{
    echo $i ;
    echo "<br>";
    echo $x;
    echo "<br>";
    $i++;
    $x+=2;
}

echo "do..While loop <br>";
$p = 3;
do{
    echo "$p ";
    $p++;
}while($p<30);

echo "<br>";
for($j = 0; $j < 6 ; $j++)
{
    echo "the number is $j <br>";
}
 //ForEach Loop
 echo "foreach Loop<br>";
$arr = array('a','b','c','d');
for($i = 0; $i< count($arr); $i++)
{
    echo $arr[$i];
    echo "<br>";
}
$arra = array('apple','banana','kiwi','pineapple');
foreach($arra as $value)
{
    echo "$value <br>";
}
?>