<?php
require 'db.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age=$_POST["age"];
  $dob=$_POST["dob"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_upload VALUES('', '$name', '$age','$dob','$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'data.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<center><h2>WELCOME TO BISHOP ORPHANAGE </h2><br></center>
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <center><h3>ADMIN PAGE</h3></center>
  <body>
    <center>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">NAME:</label>
      <input type="text" name="name" id = "name" required value=""> <br> <br>
      AGE: <input type="text" name="age" id="age"><br><br>
      DOB:<input type="text" name="dob" id="dob"><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      
      <button type = "submit" name = "submit">Submit</button>
    </form>
    <br>
    <a href="data.php">Data</a>
    </center>
  </body>
</html>