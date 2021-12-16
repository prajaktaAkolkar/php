<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include  'partials/_headers.php'; ?>
    <?php include  'partials/_dbconnect.php'; ?>

<?php
 $id = $_GET['catid'];
 $sql = "SELECT * FROM `category` WHERE category_id =$id";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            // echo "<br>" .$row['category_id'];
            // echo "<br>" .$row['category_name'];
           
 
     $catname = $row['category_name'];
     $catdesc = $row['category_discription'];
 }
?>
<?php $method = $_SERVER['REQUEST_METHOD'];
echo $method;?>
   
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname ;?> forum!</h1>
            <p class="lead"> <?php echo  $catdesc;?>  </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="container">
 
        <h1>Browse Questions</h1>
        <?php
 $id = $_GET['catid'];
$sql = "SELECT * FROM `thread` WHERE thread_cat_id = $id";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
         
 
     $id = $row['thread_id'];
     $title = $row['thread_title'];
     $desc = $row['thread_desc'];
 
       echo  '<div class="row">
        <div class="media">
            <img src="img/userdefault.png" width = "54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php">'. $title.'</a></h5>
                <p>'. $desc.'</p>
            </div>
        </div>
        </div>';
    }
    ?>
      

    </div>






    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>