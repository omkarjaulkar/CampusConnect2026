<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$fullname = $_POST['fullname'];
$studentid = $_POST['studentid'];
$email = $_POST['email'];
$college = $_POST['college'];
$location = $_POST['location'];
$event = $_POST['event'];
$password = $_POST['password'];

$sql = "INSERT INTO students(fullname,studentid,email,college,location,event,password)
VALUES('$fullname','$studentid','$email','$college','$location','$event','$password')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Registration Successful</h2>";
    echo "<a href='login.php'>Go to Login</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

