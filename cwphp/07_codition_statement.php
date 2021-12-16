<?php
   $a = 125;
   $b = 90;
   if($a > $b)
   {
       echo "$a is greater than $b <br>";
   }
   else {
       echo "$b is greater  than $a <br>";
   }

   $age = 1;
   if($age>16)
   {
       echo "you can take admission in College <br>";
   }
   elseif($age>5)
   {
       echo " You can take admission in School<br>";
   }
   elseif($age>2 )
  {
      echo " you cantaek admissionin Pre-School<br>";
    
  }
  else {
      echo " You are too small to go to school<br>";
  }

?>

<?php
  //switch case
    $ag = 30;
  switch($ag)
    {
      case 12 :
        echo "You are 12 years old";
break;
     case 30 :
        echo "you are 30 years old"; 
break;
    case 50 :
        echo "you are 50 years old";
        break;
     default :
     echo "You are age is not valid";
     break;
  }


?>
