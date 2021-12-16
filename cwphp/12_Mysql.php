<?php
  //connection to database.

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "myphp";

  $conn= mysqli_connect($servername,$username,$password,$database);
  //$sql = "CREATE DATABASE myphp";
  //mysqli_query($conn,$sql);
  if(!$conn){
      die ("Sorry we failedto connect". mysqli_connect_error());
  }
  else{
    echo "<br> Connection Succesfully to database: " . $database;
  }

$sql = "INSERT INTO `dddw` (`uid`,`name`,`age`) VALUES (2,'dd',23)";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "<br>Record Inserted Successfully";
}
else
{
    echo "<br>Record Not inserteddue to this Error: " . mysqli_error($conn);
}

  