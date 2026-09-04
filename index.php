<!DOCTYPE html>
<html>
<head>
<title>CampusConnect 2026</title>
<style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#0f172a,#1e3a8a,#06b6d4);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
}
.container{
    text-align:center;
    background:rgba(255,255,255,0.1);
    padding:40px;
    border-radius:20px;
    backdrop-filter:blur(10px);
    box-shadow:0 0 25px rgba(0,0,0,0.3);
    animation:fadeIn 1.5s ease;
}
.btn{
    display:inline-block;
    margin:10px;
    padding:12px 25px;
    background:white;
    color:#1e3a8a;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}
.btn:hover{
    transform:scale(1.05);
}
@keyframes fadeIn{
    from{opacity:0;transform:translateY(30px);}
    to{opacity:1;transform:translateY(0);}
}
</style>
</head>
<body>
<div class="container">
<h1>CampusConnect 2026</h1>
<p>Student Registration & Login Portal</p>

<a class="btn" href="register.php">Register</a>
<a class="btn" href="login.php">Login</a>

</div>
</body>
</html>


