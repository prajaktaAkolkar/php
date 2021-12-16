<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "myphp";

  $conn = mysqli_connect($server,$username,$password,$database);
  if(!$conn)
  {
      echo "Not Connected to Database";
  }
  else 
  {
      echo "Connected to Database";
  }

?>