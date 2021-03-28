<?php
$con=mysqli_connect("localhost","root","","login") or die("Connection Failed");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Now</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
body{background-image: linear-gradient(45deg,#ebedee,#fdfbfb 40%);justify-content:center;display:flex;}
table{border-spacing:10px;font-family:Georgia;}
tr{border-left:4px solid rgba(200,200,200,0.25)}
.shadow{box-shadow:3px 3px 30px 5px #ebedee; background-color:white}

.button{
	background-image:linear-gradient(45deg,#96deda,#50c9c3);
	color:white;padding:14px 20px;margin:8px 0;
	border:none;cursor:pointer;width:100%;
	box-shadow:2px 2px 5px 3px #ebedee;
	}
.button:hover {opacity:0.8;}

.reset {
	width:auto;
	color:white;
	margin:8px 0;
	border:none;
	cursor:pointer;
	padding:10px 18px;
	background-color:#f44336;
	box-shadow:2px 2px 5px 1px #ebedee;
	}
.reset:hover {opacity:0.8;}

.login-div{
	max-width:500px;
	padding:30px;
	border:1px solid #ddd;
	border-radius:15px;
	}
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
<div class="input-field">
<h2 style="text-align:center">Create your Account</h2>
<form autocomplete="off" style="background-image: linear-gradient(180deg,#F5FCFF,#DBF3FA" method="post">

<div class="login-div">
<div class="row center-align">

<table class="shadow" align="center" style="background-color:white;">

<h5>Sign in</h5>
<div class="input-field col s6">

<tr>
<td><input type="text" id="username" name="username" placeholder="Username" class="validate" required></td>
</tr>

<tr>
<td><input type="text" id="gender" name="gender" placeholder="Gender(Eg:Male/Female)" class="validate" required></td>
</tr>

<tr>
<td><input type="password" id="password" name="password" placeholder="Password" class="validate" required>
<i class="fa fa-eye showpwd" style="font-size:16px;color:grey" onClick="showPwd('passwd', this)"></i></td>
</tr>

<tr>
<td><input type="text" id="email" name="email" placeholder="Email" class="validate" required></td>
</tr>

<tr>
<td><input type="text" id="phonenumber" name="phonenumber" placeholder="Number Phone" class="validate" required></td>
</tr>

<tr>
<td><input type="submit" class="button" id="submit" name="submit" value="Done"><input type="reset" class="reset" id="reset" name="reset" value="Reset"></td>
</tr>
</table>
		</div>
	</div>
</div>
</form>
</div>

<?php
if(isset($_POST['submit']))
{
 $username=$_POST['username'];
 $gender=$_POST['gender'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $phonenumber=$_POST['phonenumber'];
 
 $dup1="SELECT * FROM login WHERE username='$username' and pass='$password'";
 $query1=mysqli_query($con,$dup1);
 if(mysqli_num_rows($query1)>0)
 {
  echo"<script>alert('data exist')</script>";
 }
 else
 {
	$sql = "INSERT INTO login (username,gender,pass,email,phonenumber) VALUES ('$username',  '$gender', '$password', '$email', '$phonenumber')";
	$query2=mysqli_query($con,$sql);
	if($query2)
	{
		echo"<script>alert('success')</script>";
		header('Location: 1.login page.php');
	}
	else
	{
		echo"<script>alert('error')</script>";
	}
 }
}
?>
</body>
</html>