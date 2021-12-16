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

  $sql = "DELETE FROM `ddd` WHERE `email`= 'qqqq' LIMIT 3";
  $result = mysqli_query($conn,$sql);
  $aff = mysqli_affected_rows($conn);
  echo "<br>The Number of Affected rows : " .$aff;
?>