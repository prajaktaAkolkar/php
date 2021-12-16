<?php
session_start();

if(isset($_SESSION['username']))
{
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your Favorite Category is : ". $_SESSION['favcat'];

}
else {
    echo "Please Logged in";
}
?>

