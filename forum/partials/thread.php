<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include  '_headers.php'; ?>
    <?php include  '_dbconnect.php'; ?>

    <?php
 $id = $_GET['threadid'];
 $sql = "SELECT * FROM `thread` WHERE thread_id =$id";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            //echo "<br>" .$row['thread_title'];
            // echo "<br>" .$row['category_name'];
           
 
     $thrname = $row['thread_title'];
     $thrdesc = $row['thread_desc'];
 }
?>
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
echo $method;
if($method== 'POST'){
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `comment` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`)
     VALUES ('$comment', '$id', '0', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    $showAlert=true;
    if($showAlert)
                {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> your comment has been added!!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
}?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"> <?php echo $thrname ;?> </h1>
            <p class="lead"> <?php echo  $thrdesc;?> </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p><b>Posted by: XYZ </b> </p>
        </div>
    </div>
    <div class="container">
        <h1 class = "py-2">Post a Comment</h1>
    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method ="post">

  <div class="form-group">
    <label for="exampleInputPassword1">Type Your Comment</label>
    <textarea class="form-control" id = "comment" name="comment" rows= 4></textarea>
  </div>
 <!-- INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `comment_time`) VALUES (NULL, 'ssss', '1', current_timestamp());
--> <button type="submit" class="btn btn-success">Post Comment</button>
</form>

    </div>
    <div class="container" id="ques">

        <h1>Discussions</h1>
     
         <?php
 $id = $_GET['threadid'];
$sql = "SELECT * FROM `comment` WHERE thread_id = $id";
          $result = mysqli_query($conn,$sql);
          $noResult = true;
          while($row = mysqli_fetch_assoc($result)){
              $noResult = false;
               $id = $row['comment_id '];
              $title = $row['comment_content'];
              $comment_time = $row['comment_time'];
 
       echo  '<div class="row">
        <div class="media">
        <div class="row">
            <div class="media-body">
            <img src="../img/userdefault.png" width = "50px" class="mr-3" alt="...">
            <p class="font-weight-bold my-0">Anonymous user at '.$comment_time.'</p>
            <p>'.$title.'</p>
            </div>
            </div>
        </div>
        </div>';

    }
    if($noResult)
    {
  echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <p class="display-4">No Thread Found</p>
    <p class="lead">Be The First Person To Ask</p>
  </div>
</div>';
    }
    ?> 


    </div>





    <?php include '_footer.php'; ?>
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