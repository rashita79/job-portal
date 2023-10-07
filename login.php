<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
      body{
        background-color : pink;
      }
    </style>
</head>

<body>
       <h1>LOGIN HERE</h1>
         <form action="login_action.php" method="post">
           <h3>Enter your email address</h3>
           <input type="email" name="email" required> <br>
           <h3>Enter your password</h3>
           <input type="password" name="password" required> <br>
           <button type='Submit' name='register_submit' required >Submit</Button>
         </form>
</body>
</html>
