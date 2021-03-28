<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<style>
body {font-family:Arial;margin-top:130;margin-left:130;margin-right:130;background-image:linear-gradient(to right,white,#ebedee);}
.content
{
    width: auto;
    height: auto;
    background: RGBA(255, 255, 255,0.6);
    margin: auto;
    border-radius: 4%;
    display: table;
    box-shadow:0px 0px 5px 1px #939393;
	  min-height: 70%;
	  margin-bottom: -50px;
}
label{font-size:14px;margin:8px 3px}
input[type=text], input[type=password] {width:100%;padding:12px 20px;margin:8px 0;display:inline-block;border:1px solid #ccc;box-sizing:border-box;}
img.user {width: 40%;border-radius: 50%;}
.imgcontainer {text-align:center;margin:24px 0 12px 0;}
.container {padding: 16px;}
.button {background-image:linear-gradient(45deg,#B78628,#FCC201);color:white;padding:14px 20px;border:none;width:99%;box-shadow:0px 0px 2px 2px #ebedee;display:block;margin:auto auto}
.button:hover {opacity:0.8;}
.reset {color:white;margin:8px 3px;border:none;cursor:pointer;padding:10px 18px;background-color:#f44336;box-shadow:2px 2px 5px 3px #ebedee;}
.reset:hover {opacity:0.8;}
.register {float:right;margin:-30px 5px}
</style>

<script type="text/javascript">
function showPwd(id, el) {
  let x = document.getElementById("password");
  
  if (x.type === "password") {
    x.type = "text";
    el.className = 'fa fa-eye-slash showpwd';
  } else {
    x.type = "password";
    el.className = 'fa fa-eye showpwd';
  }
}
</script>

</head>

<body>
<form autocomplete="off" method="post">
<div class="container">
    <div class="content">
<div class="imgcontainer"><img src="logo.png" alt="Logo" class="user"></div>

<label for="username"><b>Username</b></label>
<input type="text" id="username" name="username" placeholder="Enter Username or Email" required>

<label for="password"><b>Password</b></label>
<p><input type="password" id="password" name="password" placeholder="Enter Password" required>
<i class="fa fa-eye showpwd" style="font-size:16px;color:grey" onClick="showPwd('passwd', this)"></i><p>
<input type="submit" class="button" id="btn" name="submit" value="Login">

<input type="checkbox" id="remember" name="remember" value="remember"> 
<label for="remember"> Remember me</label>

<div class="register"><a href="2.register page.php">Register Now</a></div>
<input type="reset" class="reset" value="Cancel">
</div>
</div>
</form>

<?php
$con=mysqli_connect("localhost","root","","login") or die("Connection Failed");
if(isset($_POST['submit']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $select="select * from login where username='$username' and pass='$password'";
 $query=mysqli_query($con,$select);
 if(mysqli_num_rows($query)>0)
 {
  header('Location: 3.facility booking system.php');
 }
 else
 {
  echo "<script>Swal.fire({type:'error',title:'Error',text:'Wrong username or password'})</script>";
 }
}
?>

</body>
</html>