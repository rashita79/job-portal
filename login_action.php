<?php

include 'config.php';
include 'login.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "Select * from user where email = '$email' and pass='$password' ";
$result_userdatabase = mysqli_query($conn, $sql_userdatabase);
if(mysqli_num_rows($result_userdatabase) <= 0)
{
		echo "<center><h1><b>Something went wrong please login again<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="home.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! &nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}
else
{
	
	header("location:after_login.php");
	$row_userdatabase = mysqli_fetch_array($result_userdatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['firstname']=$row_userdatabase['firstame'];
	$_SESSION['secondname']=$row_userdatabase['secondname'];
    $_SESSION['phone']=$row_userdatabase['Phone'];

	$_SESSION['log']= '1' ;
}
?>