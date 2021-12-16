<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include '_dbconnect.php';
    $singUpName = $_POST['signupName'];
    $signUpEmail =$_POST['signUpEmail'];
    $signUppassword = $_POST['signUPpassword'];
    $signUpCPassword = $_POST['signUpcpassword'];

    //Check whether email exists or not
    $existSql = "SELECT * FROM `users` WHERE user_email = '$singUpName'";
    $result = mysqli_query($conn,$existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0)
    {
        $showerror = "Email already Exists";
    }
    else 
    {
        if($signUppassword ==  $signUpCPassword)
        {
       // $hash = password_hash($signUppassword, PASSWORD_DEFAULT);
        //echo $hash;
         $sql1 = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `user_cpassword`, `createdAt`)
          VALUES ('$singUpName', '$signUpEmail', '$signUppassword', '$signUpCPassword', current_timestamp())";
          $result = mysqli_query($conn,$sql1);

      
          echo $result;
          if($result){
              $showAlert = true;
              header("Location:/index.php?signupsucess=true");
             // exit();
        }
        else 
        {
            $showerror = "Password Not Matched"; 
           
        }
    }
   header("Location: /forum/index.php?signupsucess=false&error=$showerror");
}
}
?>