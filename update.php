<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM create_orp");
?>
<!DOCTYPE html>
<html>
    <center>
 <head>
   <title>Update Data</title>
   UPDATE ORPHANAGE DATA
 </head>
</center>
 <style>
  body {
  background-image: url("image/bg4.jpg");
}
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
  </style>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
      <td>ORPHANAGE ID</td>
    <td>ORPHANAGE NAME</td>
    <td>ORPHANAGE AGE</td>
    <td>GENDER</td>
    <td>DATE OF BIRTH</td>
    <td> GUARDIAN NAME</td>
    <td>GUARDIAN OCCUPATION</td>
    <td>GUARDIAN AGE </td>
    <td>GUARDIAN ADDRESS</td>
    <td>GUARDIAN PHONE NUMBER</td>
    <td>GUARDIAN EMAIL </td>
    <td>DATE OF JOINING</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
      <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["dob"]; ?></td>
    <td><?php echo $row["gudname"]; ?></td>
    <td><?php echo $row["gudocc"]; ?></td>
    <td><?php echo $row["gudage"]; ?></td>
    <td><?php echo $row["gudadd"]; ?></td>
    <td><?php echo $row["gudphn"]; ?></td>
    <td><?php echo $row["gudemail"]; ?></td>
    <td><?php echo $row["doj"]; ?></td>
		<td><a href="update-process.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>