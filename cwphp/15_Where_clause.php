<?php
  $server = "localhost";
  $username ="root";
  $password = "";
  $database = "myphp";
$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "Not Connected to database";
}
else {
    echo "Connected to Database";
}
  $sql = "SELECT * FROM `ddd` WHERE `email`= 'qqqq'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  echo  $num ."records are found";
  if($num >0)
  {
      while($row = mysqli_fetch_assoc($result))
      {
          echo "<br>". $row['uid'] . "   ". $row['name'] ."    ". $row['email'];
      }
  }

  $sql =  "UPDATE `ddd` SET `email`= 'qqqq' WHERE `uid` = 2";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
      echo "<br> Record Updated....";
  }
  else {
      echo "<br> Record Not Updated";
  }
?>