
<?php
  //echo "Write file In Php";
  $fptr = fopen("mytest.txt","a");
  echo $fptr;
  fwrite($fptr,"this is fwrite file");
?>