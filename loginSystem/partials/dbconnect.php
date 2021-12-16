<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo "Successfully Connected";
}
else 
{
    echo "Falied to connect" .mysqli_connect_error();
}
?>