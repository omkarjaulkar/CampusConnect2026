<?php

include 'db.php';

$user=$_POST['user'];
$password=$_POST['password'];

$sql="SELECT * FROM students
WHERE (email='$user' OR studentid='$user')
AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0)
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<style>
body{
font-family:Arial;
background:linear-gradient(135deg,#22c55e,#16a34a);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
margin:0;
color:white;
}
.card{
text-align:center;
background:rgba(255,255,255,.15);
padding:40px;
border-radius:20px;
}
</style>
</head>
<body>

<div class="card">
<h1>🎉 Welcome to CampusConnect!</h1>
<p>Login Successful</p>
<a href="index.php" style="color:white;">Go Home</a>
</div>

</body>
</html>
<?php
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Failed</title>
<style>
body{
font-family:Arial;
background:#ef4444;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
color:white;
}
</style>
</head>
<body>

<h1>Invalid username or password.</h1>

</body>
</html>
<?php
}
?>
