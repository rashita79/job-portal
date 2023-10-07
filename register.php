<?php
include 'config.php';
include 'home.php';

$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$phone =$_POST['phone'];
$password= $_POST['password'];

$sql = "INSERT INTO user (firstname, secondname, email, phone, pass) VALUES ('$firstname', '$lastname', '$email', '$phone', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
