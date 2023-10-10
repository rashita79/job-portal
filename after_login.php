<?php
session_start();
include 'config.php';
if (!isset($_SESSION['log']) || $_SESSION['log'] !== '1') {
    header("location: login.php");
    exit();
}
$firstname = $_SESSION['firstname'];
$email = $_SESSION['email'];
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
            <a href="logout.php">LOGOUT</a>
            <a href="application.php">APPLICATION STATUS</a>
            <a href="about.php">ABOUT US</a>
        </div>
</nav>
             <h1>Welcome <?php  echo " ". $_SESSION['firstname'] ."" ?></h1>
             <h2> GET YOUR REFERALS</h2>
             <form action="apply.php" method="post">
                <h3>Company Name</h3>
                <input type="text" name="company" required><br>
                <h3>Job ID</h3>
                <input type="text" name="jobid" required><br>
                <h3>Skills set</h3> 
                <input type="text" name="skills"> <br>
                <h3>Resume link</h3>
                <input type="url" name="resume" required><br>
                <button type="submit" name="submit"> SUBMIT</button>
             </form>
    </div>
   
</body>
</html>