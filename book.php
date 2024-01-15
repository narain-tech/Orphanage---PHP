<?php
include 'db.php';
$ID=$_POST['ID'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$gudname=$_POST['gudname'];
$gudocc=$_POST['gudocc'];
$gudage=$_POST['gudage'];
$gudadd=$_POST['gudadd'];
$gudphn=$_POST['gudphn'];
$gudemail=$_POST['gudemail'];
$doj=$_POST['doj'];
$qry="insert into create_orp(ID,name,age,gender,dob,gudname,gudocc,gudage,gudadd,gudphn,gudemail,doj) values('$ID','$name','$age','$gender','$dob','$gudname','$gudocc','$gudage','$gudadd','$gudphn','$gudemail','$doj')";
mysqli_query($conn,$qry);
if($qry)
{
echo
"
<script> alert('Data Inserted Successfully'); </script>
";
}
else
{
echo "failed";
}
?>
