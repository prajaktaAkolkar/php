<?php
  echo "Functions in PHP";

  
  function processMarks($mArray){
    $sum = 0;
    foreach($mArray as $value)
    {
        $sum += $value;
        
    }
    return $sum;
  }
 $marks = [25,36,88,91,78,88];
  $sumMarks = processMarks($marks);
  echo "Total of Marks out of 600 is : $sumMarks";

 function avgMarks($marks)
 {
     $sum = 0;
     //$i = 1;
     foreach($marks as $value){
         $sum += $value;
        $i++;
     }
     
     return $sum/(count($marks)+1);
 }

 $rMarks = [58,68,65,48,55,66];
 $average = avgMarks($rMarks);
 echo "<br>The average marks are : $average";

 date_default_timezone_set('UTC');

 echo"<br>Date Function";
 $date = date(" j S l");
 echo "<br>Todays Dated is $date";
 $dm = date("jS F Y  h:i:s A g : i A e");
 echo "<br>Today is : $dm";


 echo "<br>Associative Array";
 $Arr = array('r' => 'red', 'y'=>'Yellow','p'=> 'pink','g'=>'green' , 8=> 'avery');
echo "<br>" . $Arr['r'];
echo "<br>" . $Arr['p'];
echo "<br>" . $Arr[8];

foreach($Arr as $key => $value)
{
    echo "<br>The favorite color of $key is $value";
}

echo "<br>Multi-Dimensional Array<br>";
$multArray = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,8,7,6)
) ;

echo var_dump($multArray). "<br>";
//echo $multArray[0][2];

// for ($i=0; $i < count($multArray); $i++)
// {
// echo var_dump($multArray[$i]);

// echo "<br>";
// }
for ($i=0; $i < count($multArray); $i++) { 
    for($j =0; $j < count($multArray[$i]);$j++)
    {
        echo $multArray[$i][$j] ;
    }
   echo "<br>";
}

?>