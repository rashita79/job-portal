<?php
include 'config.php';
session_start();
if (!isset($_SESSION['log']) || $_SESSION['log'] !== '1') {
    header("location: home.php");
    exit();
}
$currentUserEmail = $_SESSION['email'];

// Prepare and execute a query to fetch the company and jobid for the current user's email
$query = "SELECT company, jobid FROM apply WHERE email =?";
$stmt = $conn->prepare($query);

if ($stmt) {
    $stmt->bind_param("s", $currentUserEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    $applications = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
} else {
    echo "Error in preparing the SQL statement: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
</head>
<style>
    body{
       background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzjW45_1AHC87TBlvxPTIhbbnx6N0oA2iUkA&usqp=CAU');
       background-size: cover; /* Adjusts the background image to cover the entire viewport */
    background-repeat: no-repeat; /* Prevents the background image from repeating */
    background-attachment: fixed; /* Fixes the background image in place */
    background-position: center center;
    }
    table{
        width: 100px;
        border-collapse : collapse;
        border-color : #f2f2f2;
        border-radius : 30;
        margin-left: auto;
    margin-right: auto;
        
    }
    th {
    background-color: #f2f2f2; 
    text-align: left; 
    padding: 10px; 
    border: 1px solid #ccc; /* Border */
    font-size: 30px;
}

td {
    padding: 8px; 
    border: 1px solid #ccc;
    font-size :25px; 
}

h1{
    text-align:center;
}
h2{
    text-align:center;
}
</style>
<body>
    <h1>SEE YOUR APPLICATIONS</h1>
    
    <table>
        <thead>
            <tr>
                <th>Company</th>
                <th>Job ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application) : ?>
                <tr>
                    <td><?= $application['company']; ?></td>
                    <td><?= $application['jobid']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
   <h2><a href="after_login.php">Go to Home page</a></h2> 
</body>
</html>
