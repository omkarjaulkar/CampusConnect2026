<!DOCTYPE html>
<html>
<head>
<title>CampusConnect Registration</title>
<style>
body{
font-family:Arial,sans-serif;
background:linear-gradient(135deg,#2563eb,#06b6d4,#7c3aed);
background-size:400% 400%;
animation:gradient 10s ease infinite;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}
@keyframes gradient{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}
.form-box{
background:rgba(255,255,255,.15);
backdrop-filter:blur(12px);
padding:30px;
border-radius:20px;
width:400px;
box-shadow:0 0 25px rgba(0,0,0,.3);
color:white;
}
input{
width:100%;
padding:10px;
margin:8px 0;
border:none;
border-radius:8px;
}
button{
width:100%;
padding:12px;
background:#22c55e;
border:none;
border-radius:8px;
color:white;
font-size:16px;
cursor:pointer;
}
button:hover{
transform:scale(1.05);
}
</style>
</head>
<body>

<div class="form-box">
<h2>🎓 Student Registration</h2>

<form action="register_process.php" method="post">

<input type="text" name="fullname" placeholder="Full Name" required>

<input type="text" name="studentid" placeholder="Student ID" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="college" placeholder="College Name" required>

<input type="text" name="location" placeholder="Location" required>

<input type="text" name="event" placeholder="Event" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Register</button>

</form>
</div>

</body>
</html>

