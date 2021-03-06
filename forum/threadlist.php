<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
<?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
echo $method;
if($method=='POST')
{
     //insert into thread table
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];
    $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`)
                VALUES ('$th_title', ' $th_desc', '$id', '0', current_timestamp())";
                $result=mysqli_query($conn,$sql);
                $showAlert=true;
                if($showAlert)
                {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Inserted a Thread.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
}
?>
   
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
        <h1 class = "py-2">Start Discussion</h1>
    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method ="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Problem Title</label>
    <input type="text" class="form-control" id="title"  name ="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Keep ur title as short and crisp aspossible</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ellabartae ur Concern</label>
    <input type="text" class="form-control" id="desc" name ="desc"> 
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>

    </div>
    <div class="container" id="ques">
 
        <h1>Browse Questions</h1>
        <?php
 $id = $_GET['catid'];
$sql = "SELECT * FROM `thread` WHERE thread_cat_id = $id";
          $result = mysqli_query($conn,$sql);
          $noResult = true;
          while($row = mysqli_fetch_assoc($result)){
         $noResult = false;
     $id = $row['thread_id'];
     $title = $row['thread_title'];
     $desc = $row['thread_desc'];
 
       echo  '<div class="row">
        <div class="media">
            <img src="img/userdefault.png" width = "54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="partials/thread.php?threadid='.$id.'">'. $title.'</a></h5>
                <p>'. $desc.'</p>
            </div>
        </div>
        </div>';
    }
    if($noResult)
    {
  echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <p class="display-4">No Result Found</p>
    <p class="lead">Be The First Person To Ask</p>
  </div>
</div>';
    }?>
     
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