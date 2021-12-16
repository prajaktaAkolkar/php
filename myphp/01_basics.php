<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first Php website

        <?php
        echo "<br>";
        echo "Hello World";
        echo "<br>";
        ?>

        <?php
        echo "Hello World again";
        //Arithmatic  operator
        $VAR = 10;
        $var1 = 20;
        echo "<br>";
        echo "The value of $VAR+$var1 = ";
        echo $VAR+$var1;
        echo "<br>";
        echo $VAR += $var1;
        echo "<br>";
        echo ++$VAR;
        echo "<br>";
        echo "The value of $VAR-$var1 = ";
        echo $VAR-$var1;
        echo "<br>";
        echo "<br>";
        echo "The value of $VAR/$var1 = ";
        echo $VAR/$var1;
        echo "<br>";
        echo "<br>";
        echo "The value of $VAR*$var1 = ";
        echo $VAR*$var1;
        echo "<br>";

        //Assignment operator ==,+=,-=,*=
        $newvar =$VAR;
        echo "The value of new Variable is:";
        echo "<br>";
         echo $newvar;
         echo "<br>";
         echo "The value of new Variable is:";
        echo "<br>";
         echo $newvar += 1;
         echo "<br>";
         echo $newvar *= 2;
         echo "<br>";
         echo $newvar /= 2;
         echo "<br>";
         
         //echo "<h1>Comparison Operator</h1>";
         echo "The value of 1 ==4 is :";
         echo var_dump(1==4);
         echo "<br>";
         echo "The value of 1 !=4 is :";
         echo var_dump(1!=4);
         echo "<br>";
         echo "The value of 1 >=4 is :";
         echo var_dump(1>=4);
         echo "<br>";
         echo "The value of 1 <=4 is :";
         echo var_dump(1<=4);
         echo "<br>";
    
         //Increment/decrement Operator
        echo $newvar++;
        echo "<br>";
       
        echo "<br>";
        echo +$newvar;
        echo "<br>";
        echo $newvar--;
        echo "<br>";
        echo --$newvar;
        echo "<br>";

        //Logical Operator AND(&&),OR(||),XOR,NOT (!)
$myvar = false and true;
echo var_dump($myvar);
echo "<br>";
$myvar1 = (true) or (false);
echo var_dump($myvar1);
echo "<br>";
$myvar2 = (true) xor (true);
echo var_dump($myvar2);
echo "<br>";
$myvar2 = (false) xor (true);
echo var_dump($myvar2);
echo "<br>";
        ?>
        <?php
        // Datatypes in PHP;
        //  1. Integer
        //  2. String
        //  3. Float
        //  4. Boolean
        //  5. Array
        //  6. Object
        echo "Data Type <br>";
        $str = "this is a string";
        echo var_dump($str);
        echo "<br>";
        $int = 99;
        echo var_dump($int);
        $flt = 99.1;
        echo var_dump($flt);
        echo "<br>";
        echo "Constant in PHP";
        echo "<br>";
        echo "Constant value for PI is : ";
        define('PI',3.14);
        echo PI;
        echo "<br>";
        ?>
    </div>
</body>
</html>