<?php
$conn = new mysqli("localhost","campususer","campus123","campusconnect");

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>

