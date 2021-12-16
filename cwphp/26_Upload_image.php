<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-sm-6 mx-auto">
               <form action="" method = "post" enctype="multipart/form-data">
                   <div class="alert alert-info">
                    <h3>Upload Your Name and Image</h3>
                    </div>
               <div class="form-group">
               <label for="">Enter Name</label>
               <input type = "text" name = "txtname" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">File Upload</label>
                    <input type ="file" name = "txtfile" id="" class="form-control">
                </div>
                <div class = "form-group">
                     <input type = "submit" name="btnupload" id="" value = "submit" class= "btn btn-info">
                </div>
</form>
           </div>
       </div>
   </div> 
</body>
</html>
<?php

$server = "localhost";
$username = "root";
$password ="";
$database = "filedb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "Database Error:" .mysqli_connect_error();
}
   if(!empty($_POST["btnupload"]))
   {
       $name = $_POST['txtname'];
       $file=$_FILES['txtfile']['name'];
       $temp=$_FILES['txtfile']['temp_name'];
      move_uploaded_file($temp,"uploads".$file);
      $q = mysqli_query($conn,"INSERT INTO imgtb(name,img) VALUES('$name','$file')");
      if($q)
      {
          echo "<script>alert('Data Uploaded successfully');</script>";
      }
      else{
          echo "<script>alert('Data Not Uploaded');</script>";
      }
      // echo $file;
    //    echo "<pre>";
    //    print_r($file);
   }
?>