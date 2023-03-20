<?php
 include 'connect.php';
 $id=$_GET['updateid'];
 if(isset($_POST['submit'])){
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $year = $_POST['year'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $sql = "UPDATE registration 
   SET id='$id', firstName='$firstName', lastName='$lastName', year='$year', email='$email', password='$password' 
   WHERE id=$id";

   $result = mysqli_query($con, $sql);
   if($result){
      //echo "Updated successfully";
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
    <title>Editar usuario</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>
    <div>    
        <img src="perfilito.jpg" alt="No se puede visualizar" class="perfil">
    </div>
    <div class="container">
        <div class="mensaje">
            <h2>Editar usuario</h2>
            <form method="post" >
          
                <label for="nombre">Nombre:</label>
                 <input type="text" id="nombre" name="firstName" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="lastName" required>
                
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="year" required>
                
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="email" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="password" required>

             
                <button type="submit" name="submit"><a href="display.php"></a>  Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
