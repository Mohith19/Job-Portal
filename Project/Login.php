<?php
    include "config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style type="text/css"> 
    body{
        margin: 0px;
        padding: 0px;      
        background-image: url('aerial-view-business-team.jpg');
        background-size: cover;
    }
    form{
        background-color: #fff;
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
    }  
    </style>
</head>
<body>
<div class="container">
    <form method="POST" action="">
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="Login"> Submit </button>
  <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
    </form>
    <?php
    if (isset($_POST['Login'])) {
      $sql = "SELECT  * FROM `user` where email ='" . $_POST['email'] . "' and password='" . $_POST['password'] . "' ";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
        header('location:career.php');
      } else {
        echo " Please check the Login Details?";
      }
      unset($_POST);
    }
    ?>
</body>
</html>