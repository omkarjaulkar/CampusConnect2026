<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<style>
body{
font-family:Arial;
background:linear-gradient(135deg,#0f172a,#1e3a8a,#06b6d4);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
margin:0;
}
.box{
background:white;
padding:30px;
border-radius:15px;
width:350px;
box-shadow:0 0 20px rgba(0,0,0,.3);
}
input{
width:100%;
padding:10px;
margin:10px 0;
}
button{
width:100%;
padding:12px;
background:#2563eb;
color:white;
border:none;
}
</style>
</head>
<body>

<div class="box">

<h2>STUDENT LOGIN</h2>

<form action="login_process.php" method="post">

<label>Email / Student ID</label>
<input type="text" name="user" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit">LOGIN</button>

</form>

</div>

</body>
</html>

