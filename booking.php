
<html>
    <title> Booking</title>
    <head>
    </head>
    <style>
body {
  background-image: url("image/bg.jpg");
}
#form{
  border: radius 10px;
  background:#ededeb;
  color:black;
  width:290px;
  padding:4px;
}
#submit{
  background-color: #4CAF50;
}
</style>
    <body>
      
        <marquee>WELCOME TO BISHOP ORPHANAGE</marquee>
        <center>
        <img src="image/orphanage.png" width="100px" height="100px"></a>
        <h4>CREATE ORPHANAGE </h4>
        <div id=form>
        <form method="POST" action="book.php">
          ORPHANAGE ID: <input type="text" placeholder="Orphanage ID" name="ID"><br><br>
          ORPHANAGE NAME: <input type="text" placeholder="Orphanage Name" name="name"><br><br>
          ORPHANAGE AGE: <input type="number" placeholder="Orphanage Age" name="age"><br><br>
          GENDER: <input type="radio" name="gender" value="Male" required> MALE
                  <input type="radio" name="gender" value="Female"> FEMALE <br><br>
          DATE OF BIRTH: <input type="text" placeholder="Date Of Birth" name="dob"><br><br>
          GUARDIAN NAME: <input type="text" placeholder="Guardian Name" name="gudname"><br><br>
          GUARDIAN OCCUPATION : <input type="text" placeholder="Guardian Occupation" name="gudocc"><br><br>
          GUARDIAN AGE : <input type="text" placeholder="Guardian Age" name="gudage"><br><br>
          GUARDIAN ADDRESS : <input type="text" placeholder="Guardian Address" name="gudadd"><br><br>
          GUARDIAN PHONE NUMBER : <input type="text" placeholder="Guardian Phone Number" name="gudphn"><br><br>
          GUARDIAN EMAIL : <input type="text" placeholder="Guardian Email" name="gudemail"><br><br>
          DATE OF JOINING : <input type="text" placeholder="Date of joining" name="doj"><br><br>
          <button type="submit" name="submit" id="submit">Submit</button> 
          <a href="index.php">Home</a>
</form>
</div>
<center>
</body>
</html>