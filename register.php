<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM userlog WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO userlog VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <marquee>WELCOME TO BISHOP ORPHANAGE</marquee>
    <center>
        <img src="image\create.png" width="100px" height="100px"><br>
    <h2>Registration</h2>
    <form method="POST" action="">
        NAME: <input type="text" placeholder="Name" name="name"><br><br>
        USERNAME: <input type="text" placeholder="Username" name="username"><br><br>
        EMAIL: <input type="email" placeholder="Email" name="email"><br><br>
        PASSWORD: <input type="password" placeholder="Password" name="password"><br><br>
        CONFIRM PASSWORD:<input type="password" placeholder="Confirm Password" name="confirmpassword"><br><br>
        <button type="submit" name="submit">Register</button>

    </form>
    
    <br>
    <a href="login.php">Login Page</a>
</center>
  </body>
</html>
