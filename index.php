<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM userlog WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<html>
  <head>
    <title>Welcome to Bishop Orphanage</title>
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }
      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);
      }
      body {
  background-image: url("image/bg1.jpg");
}
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>   
      </div> 
    </div>    <div>
      <link href="css/home.css" rel="stylesheet" />
      <div class="home-container">
        <header data-role="Header" class="home-header">
          <div class="home-container1">
            <div class="home-nav">
              <nav
                class="navigation-links-nav navigation-links-root-class-name10"
              >
                <a href="about.php" class="navigation-links-navlink">
                  <span>About</span>
                </a>
                <a href="booking.php" class="navigation-links-text">
                  <span>Booking</span>
                </a>
                <a href="contact.php" class="navigation-links-text1">
                  <span>Contact</span>
                </a>
                <a href="donate.php" class="navigation-links-text2">
                  <span>Donate</span>
                </a>
                <a href="admin.php" class="navigation-links-text3">
                  <span></span>
                </a>
              </nav>
            </div>
          </div>
        </header>
        <Marquee style="background-color:DodgerBlue;"><h4>Welcome to the family
        WE ARE SO GLAD TO HAVE HERE!</h4></Marquee><br>
        <img src="image\slide1.jpg"> <br>
        <b><center> A Person may rightfull be happy if in this</center><p>
        <center> life he could do a great favor for widows and</center></p>
       <p> <center>Orphans . could assist support than, and</center>
        <center>facilitate fate of people.</center></p></b>
  </body>
</html>
