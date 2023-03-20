<?php
 include 'connect.php';

 if(isset($_POST['submit'])){
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $year = $_POST['year'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "INSERT INTO registration(firstName, lastName, year, email, password) 
   VALUES('$firstName', '$lastName', '$year', '$email', '$password')";

   $result = mysqli_query($con, $sql);
   if($result){
      //echo "New record created successfully";
      header("Location:display.php");
    }else{
      die(mysqli_error($con));
    }
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrar alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <div class="container">
      <h1>Registrar alumno</h1>
      <form method="post"  >
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="firstName" required>
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" id="apellidos" name="lastName" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad:</label>
          <input type="number" id="edad" name="year" required>
        </div>
        <div class="form-group">
          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="email" required>
        </div>
        <div class="form-group">
          <label for="contraseña">Contraseña:</label>
          <input type="password" id="contraseña" name="password" required>
        </div>
        <button class="btn btn-warning" type="submit" name="submit"><a href="display.php"></a>  Registrar</button>
      </form>
    </div>
  </body>
</html>