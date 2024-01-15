<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
    <link rel="stylesheet" href="css/contactstyle.css">
</head>
<style>
    body {
  background-image: url("image/bg2.png");
}
</style>
<body>
    <div class="container">
        <form>
            <h1>Contact Us</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="button"><br><br><br>
            <a href="index.php" >Go to Home Page</a>
        </form>
    </div>

</body>
</html>