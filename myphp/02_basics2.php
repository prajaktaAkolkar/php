<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
    *{
       
        box-sizing : border-box;
    }
    .container
    {
        max-width: 80%;
        margin : auto;
        background-color : gray;
        padding :20px;
        text-align : center;
    }
    </style>
<body>
    <div class="container">
       <h1>Lets Learn About PHP</h1>
       <p>Your PartyStatus is Here: </p>
        <?php
  $age =7;
  if($age>18)
  {
      echo "You can goto the Party";
  }
  else if($age ==7)
  {
      echo "You are $age years old";
  }
  else{
      echo "You can not got to Party";
  }
  echo "<br>";
  $lan = array('php','c++','Nodejs','reactJs');
  $b = 0;
  while($b < count($lan)){
      echo "<br>The value of Languae is: ";
      echo $lan[$b];
      $b++;
      
  }
//   echo $lan[0];
//   echo count($lan);
//Loops in php
$a = 0;
//do--whileloop
do
{
    echo "<br>The value of a is:";
    echo $a;
    $a++;
   
}while($a < 10);


//for Loop
for ($i=0; $i < 10; $i++) { 
    echo "<br>The value of i from for loop: $i";
}

//foreachloop
foreach ($lan as $value) {
    echo "<br>The  value from forEach loop is : $value";
}

//Function in php
function print5(){
    echo "<br> FIVE";
}
print5();
print5();


function printNumber($num){
    echo "<br>Your Number is : $num";
}
printNumber(55);
printNumber(88);
?>
    </div>
    
</body>
</html>