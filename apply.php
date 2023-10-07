<?php

include 'config.php';
include 'after_login.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['log']) || $_SESSION['log'] !== '1') {
    header("location: home.php");
    exit();
}
$firstname = $_SESSION['firstname'];
$email = $_SESSION['email'];
$company = $_POST['company'];
$jobid = $_POST['jobid'];
$skills= $_POST['skills'];
$resume= $_POST['resume'];
$sql = "INSERT INTO apply (email,company,jobid,skills,resume) VALUES ('$email','$company','$jobid','$skills','resume')";
if(mysqli_query($conn,$sql)){
    echo "Applied for Referal succesfully !!";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>