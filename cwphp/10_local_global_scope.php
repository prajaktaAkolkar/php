<html>
    <h2>
<?php
 echo "<br> Local and Global Scope of Variables in PHP";

?>
</h2>
<?php
 $a = 98;
$b = 10;
 function printVal(){
    // $a = 100;
    global $a , $b;
    $a = 150;
    $b = 250;
     echo "<br> The value is : $a , $b <br>";
    
 }
 printVal();
 echo $a ."<br>";
 echo $b ."<br>";

 echo var_dump($GLOBALS);

?>
</html>
