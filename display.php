<?php
// Path: connect.php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1></h1>
<div class="container">

    <button type="button" class="btn btn-warning my-5"><a href="index.php"
    >Add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Year</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="SELECT * FROM registration";
    $result=mysqli_query($con,$sql);
    if($result){

        while ($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $firstName=$row['firstName'];
            $lastName=$row['lastName'];
            $year=$row['year'];
            $email=$row['email'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$firstName.'</td>
            <td>'.$lastName.'</td>
            <td>'.$year.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-warning"><a href="update.php?
            updateid='.$id.'">Update</a></
            button>
            <button class="btn btn-warning"><a href="eliminar.php?deleteid='.$id.'">Delete</a></button>
            </td>

          </tr>';
        }
    }
    ?>

  </tbody>
</table>
</div>

</body>
</html>