<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE create_orp set ID='" . $_POST['ID'] . "', name='" . $_POST['name'] . "', age='" . $_POST['age'] . "', gender='" . $_POST['gender'] . "' ,dob='" . $_POST['dob']   .  "' WHERE ID='" . $_POST['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM create_orp WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<title>Update Data</title>
<head>

</head>
<body>
<form  method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="Update.php">ORPHANAGE DATABASE</a>
</div>
<input type="hidden" name="ID" placeholder="Orphanage ID" value="<?php echo $row['ID']; ?>">
ORPHANAGE ID: <input type="text" placeholder="Orphanage ID" name="ID" value="<?php echo $row['ID']; ?>"><br><br>
          ORPHANAGE NAME: <input type="text" placeholder="Orphanage Name" name="name" value="<?php echo $row['name']; ?>"><br><br>
          ORPHANAGE AGE: <input type="number" placeholder="Orphanage Age" name="age" value="<?php echo $row['age']; ?>"><br><br>
          GENDER: <input type="radio" name="gender" value="Male" required> MALE
                  <input type="radio" name="gender" value="Female" > FEMALE <br><br>
          DATE OF BIRTH: <input type="text" placeholder="Date Of Birth" name="dob" value="<?php echo $row['dob']; ?>"><br><br>
          GUARDIAN NAME: <input type="text" placeholder="Guardian Name" name="gudname" value="<?php echo $row['gudname']; ?>"><br><br>
          GUARDIAN OCCUPATION : <input type="text" placeholder="Guardian Occupation" name="gudocc" value="<?php echo $row['gudocc']; ?>"><br><br>
          GUARDIAN AGE : <input type="text" placeholder="Guardian Age" name="gudage" value="<?php echo $row['gudage']; ?>"><br><br>
          GUARDIAN ADDRESS : <input type="text" placeholder="Guardian Address" name="gudadd" value="<?php echo $row['gudadd']; ?>"><br><br>
          GUARDIAN PHONE NUMBER : <input type="text" placeholder="Guardian Phone Number" name="gudphn" value="<?php echo $row['gudphn']; ?>"><br><br>
          GUARDIAN EMAIL : <input type="text" placeholder="Guardian Email" name="gudemail" value="<?php echo $row['gudemail']; ?>"><br><br>
          DATE OF JOINING : <input type="text" placeholder="Date of joining" name="doj" value="<?php echo $row['doj']; ?>"><br><br>
          <input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>