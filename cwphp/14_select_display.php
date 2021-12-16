<?php
  
$server = "localhost";
$username = "root";
$password ="";
$database = "myphp";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    echo "Not Connectedto Database: " .mysqli_connect_error();
}
else {
    echo " Connected to database";
}

$sql = "SELECT * FROM `ddd`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo "<br> Number of Records in Table are : ";
echo $num ."<br>" ;

if($num>0)
 {
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo "<br>" .var_dump($row);
    // 
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<br>";
   echo $row['uid'] ." . Hello ".  $row['name'] ."  Your Password is : ". $row['email'];
    }
}

?>