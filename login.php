<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM userlog WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>


<html>
    <title>Login Page</title>
    <body>
        <marquee>WELCOME TO BISHOP ORPHANAGE </marquee><br><br><br>
        <a href="admin.php" style="margin-left:10px;">ADMIN LOGIN</a>
        <center>
            
            <img src="image/login.png" width="100px" height="100px"></a>
            <h5>USER LOGIN</h5>
            <form action="" method="POST">
              USERNAME:  <input type="Text" placeholder="Username or Email" name="usernameemail"><br><br>
              PASSWORD: <input type="password" placeholder="Password" name="password"><br><br>
              <button type="submit" name="submit">Login</button><br><br>
              <a href="register.php" >Create an New Account</a>
            </form>
            
        </center>
        
    </body>
</html>