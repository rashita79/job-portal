<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <STYLE>
        nav {
    background-color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
}
  body{
    background-image: url('https://img.freepik.com/premium-photo/blank-sign-empty-chair-hiring-new-job-vacancy-concept-d-rendering_601748-4880.jpg'); /* Replace 'your-background-image.jpg' with the actual image file path */
    background-size: cover; /* Adjusts the background image to cover the entire viewport */
    background-repeat: no-repeat; /* Prevents the background image from repeating */
    background-attachment: fixed; /* Fixes the background image in place */
    background-position: center center;
  }
nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    margin-right: 20px;
}

nav a:last-child {
    margin-right: 0;
}

form{
    left :50%;
}
    </STYLE>
</head>
<body>
<nav>
        <div class="left">
           <a href="">GET YOUR DREAM JOB</a>
        </div>
        <div class="right">
        <a href="home.php">HOME</a>
            <a href="contact.php">CONTACT US</a>
            <a href="login.php">LOGIN</a>
            <a href="about.php">ABOUT US</a>
        </div>
    </nav>
    <div id='form_reg'>
        <h1>REGISTER HERE!</h1>
    <form action="register.php" method="post">
        
            Enter your First name
            <br>
            <input type="text" name="firstname" required><br>
            Enter your Last name
            <br>
            <input type="text" name="lastname" required><br>
            Enter your Email
            <br>
            <input type="email"  name="email" required><br>
            Enter your Phone Number
            <br>
            <input type="tel"  name="phone" required><br>
            Enter your Password
            <br>
            <input type="password" name="password" required><br>
            <button type='Submit' name='register_submit' required >Submit</Button>
       
    </form>
    </div>
   
</body>
</html>