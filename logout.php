<?php
session_start();
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
 <link rel="shortcut icon" href="logofig.jpg" />
</head>
<body style="background-color: F5F1F0;">
<?php
session_destroy();
echo '<center><h2>Thank You for using Journey Ease Application<h2></center><br>';
echo '<center><table><tr><td><A href="home.php"><button style="background-color:pink; border-color:black">Go to home page</button></a></td></tr></table></center>';
?>
</body style="background-color: F5F1F0;">
</html>