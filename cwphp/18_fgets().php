<?php
  $fptr = fopen("mytest.txt","r");
  //echo fgets($fptr);
  //echo fgets($fptr);
  //Reading a file line by line
  /*while ($a = fgets($fptr))
  {
      echo $a;
  }
  echo "End of file has been reached";*/

  //Reading file character by charecter
  /*while($a = fgetc($fptr))
  {
      echo $a;
      break;
  }
  echo "Reached at the endof file";*/
  //Write program to read file content charatcer by charecter untill '.' has been encounter
  while($a = fgetc($fptr))
  {
      echo $a;
      if($a == '.')
      {
          break;
      }
  }
  fclose($fptr);
?>