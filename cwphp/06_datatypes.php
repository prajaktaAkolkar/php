<?php
//object - Instance of classes
//employee is a class -->harry is object
//array
$friends = array("a","b","c","d");
echo var_dump($friends) . "<br>";


echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
$name = null;
echo var_dump($name);
echo "<br>";

//String Functions
$name = "Harry";
echo $name;
echo "Thelength of" . "String"  . strlen($name) . "<br>";
echo  "The word count   " .  str_word_count($name) . "<br>";
echo "the Reverse String is: " .  strrev($name) . "<br>";
echo "The Posion of y in $name :"  . strpos($name, 'y') . "<br>";
echo "replace $name with new name: " . str_replace('Harry','Rohan',$name) . "<br>";
echo "The $name<br>";
echo str_repeat($name, 13);
echo rtrim("<pre>    This is Trim function     </pre>") . "<br>";
echo ltrim("<pre>  This is left Trim Function   </pre> ");
?>