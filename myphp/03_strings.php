<?php
$str = "This is String";
echo strlen($str); 
echo $str . " of length: " . strlen($str);
echo "<br>";
echo "The words in a string : $str = ". str_word_count($str). "<br>";
echo "The reverse of a string : $str = ". strrev($str). "<br>";
echo "The Search for is in this string : $str = ". strpos($str, "String"). "<br>";
echo "The Replace of a string : $str = ". str_replace("is","at",$str). "<br>";


?>