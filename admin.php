<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: adminmain.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM adminlog WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: adminmain.php");
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
        <a href="login.php" style="margin-left:10px;">BACK TO USER LOGIN</a>
        <center>
            
            <img src="image/login.png" width="100px" height="100px"></a>
            <h5>ADMINLOGIN</h5>
            <form action="" method="POST">
              USERNAME:  <input type="Text" placeholder="Username or Email" name="usernameemail"><br><br>
              PASSWORD: <input type="password" placeholder="Password" name="password"><br><br>
              <button type="submit" name="submit">Login</button><br><br>
              
            </form>
            
        </center>
        
    </body>
</html>