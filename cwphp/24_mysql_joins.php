<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database ="users";

  $conn = mysqli_connect($host,$username,$password,$database);
  if(!$conn)
  {
      die("Database Error :" .mysqli_connect_error());
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mysql Joins</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
    
      <th scope="col">Eid</th>
      <th scope="col">Ename</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
      <?php
      //$set = mysqli_query($conn,"SELECT ename,salary FROM employee JOIN salary ON employee.eid= salary.eid");
     //$set = mysqli_query($conn,"SELECT ename,salary FROM employee LEFT JOIN salary ON employee.eid=salary.eid");
    // $set = mysqli_query($conn,"SELECT ename,salary FROM employee RIGHT JOIN salary ON employee.eid= salary.eid"); 
  /* $set = mysqli_query($conn,"SELECT ename,salary FROM employee LEFT JOIN salary ON employee.eid= salary.eid 
     UNION SELECT ename,salary FROM employee RIGHT JOIN salary ON employee.eid=salary.eid");*/
     $set =mysqli_query($conn,"SELECT employee.eid,ename,salary FROM employee CROSS JOIN salary");
    
     while($data = mysqli_fetch_assoc($set))
    
      {
      ?>
    <tr>
        <td><?php echo $data['employee.eid']; ?></td>
      <td><?php echo $data['ename'];?></td>
      <td><?php echo $data['salary'];?></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>