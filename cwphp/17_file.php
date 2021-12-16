<?php
  //$a = readfile("mytest.txt");
 // echo $a;

 //readfile("mytest.txt");
 //readfile("file.html");

 $fptr =fopen("mytest.txt","r");
 //echo var_dump($fptr);
 if(!$fptr)
 {
     die("Unableto open");
 }
 $content = fread($fptr,filesize("mytest.txt"));
 echo "$content";
 fclose("fptr");
?>