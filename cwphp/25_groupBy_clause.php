<?php
 $server = "localhost";
 $username="root";
 $password = "";
 $database = "users";

 $conn = mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("Database Error:" .mysqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Group By Clause</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>BRANCH NAME</th>
                <th>NUMBER OF STUDENTS</th>
            </thead> 
            <tbody>
             <?php
                //$set = mysqli_query($conn,"SELECT branch, count(*) as no_of_student FROM student group by branch HAVING branch = 'CS'");
               $set =mysqli_query($conn,"SELECT branch,count(*) as no_of_student FROM student group by branch LIMIT 3 ");
                while($data = mysqli_fetch_assoc($set))
                {
            ?>
                <tr>
                    <td><?php echo $data['branch']; ?></td>
                    <td><?php echo $data['no_of_student'];?></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</body>
</html>



