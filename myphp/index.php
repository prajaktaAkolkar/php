<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
  $server ="localhost";
  $username = "root";
  $password = "";

  //Create connection
  $con = mysqli_connect($server,$username,$password);


  //Check for connection success
  if(!$con){
      die("connection to this Database failed dueto" . mysqli_connect_error());
  }
  echo " Sucessfully connected to database";

  //collect Post variable
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $other=$_POST['other'];

  //Execute the Query
  $sql = "INSERT INTO `trip`.`tb_trip` ( `name`, `email`, `gender`, `phone`, `other`, `dt`) VALUES ( '$name', '$email', '$gender', '$phone', '$other ', current_timestamp())";
 // echo $sql;

 //flag for Sucessful insertion
  if($con->query($sql)==true)
  {
     // echo "Successfully Inserted";
     $insert = true;
  }
  else 
  {
      echo "Error: $sql <br> $con->error";
  }

  //Close the Database Connection
  $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
</head>
<body>
     <img class="bg" src="bg.jpeg" alt="">
  <div class="container">
      <h3>Welcome to College US Trip Form</h3>
      <p>Enter Your details and submit this form to Confirm your participation in the trip </p>
    <?php
    if($insert == true){
     echo "<p class='submitmsg'> Thanks for Submitting your Form.We are Happy to see you Joining for the US Trip  </p>";
    }
    ?>
      <form action="index.php" method="post">
      <input type="text"  name="name"  placeholder="Enter Your Name">
      <input type="email"  name="email"  placeholder="Enter Your Email">
      <input type="text"  name="gender"  placeholder="Enter Your gender">
      <input type="phone"  name="phone"  placeholder="Enter Your Phone">
      <textarea name="other" id="desc" cols="30" rows="10" placeholder="Enter Message Here...."></textarea>
      <button  class="btn">Submit</button>
      <button class="btn">Reset</button>
    </form>
  </div>
  <script src="index.js"></script>
</body>
</html>