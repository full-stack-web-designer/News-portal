<html>
<head>
<title>News Portal | Login Page</title>
<link rel="stylesheet" href="css/animate.css">

<script type="text/javascript">
	function validation() {
		var uname=document.getElementById('n').value;
		var upass=document.getElementById('p').value;

		if (uname=="" | uname==null) {
			document.getElementById('username').innerHTML="**Can not be empty";
			return false; 
		}
		if(upass=="" | upass==null) {
			document.getElementById('userpass').innerHTML="**Can not be empty";
			return false; 
		}
	}
</script>
<style>
	@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	min-height:140vh;
	background-image: linear-gradient(120deg,#3498db,#8e44ad);
}

.login-form{
	width: 350px;
	background:#f1f1f1;
	height: 500px;
	font-family:montserrat;
	padding: 80px 40px;
	border-radius:10px;
	
}
 #Uhadding{
	margin-bottom: 30px;
	text-align: center;
}
.txtb{
	
	margin: 30px 0;
	border-bottom: 2px solid #adadad;
}

.txtb input{
	border:none;
	outline:none;
	background:none;
	color:#333;
	font-size:20px;
	width:80%;
	padding:0 10px;
	height:40px;

}
.btn{
	width: 100%;
	background:none;
	border:2px solid #3ACA0B;
	border-radius: 10px; 
	color: black;
	padding: 5px;
	font-size: 17px;
	cursor: pointer;
	margin: 12px 0;
}
.btn:hover{
	background-color: green;
	transition:0.6s ease;
}
.container{
	margin-top: 50px;
}
.foot{
	position:absolute;top:850px; 
	width:100%;
}
</style>

</head>
<body>

<div class="header">
	<?php
	include 'includes/head.php';
	?>
</div>
<div class="container">
	<center>
	<form method="POST" action="db_login.php" class="login-form" onsubmit="return validation()">
			<font size="6">User Login</font>
<div class="txtb">
	<span  class="fa fa-user"></span>
	<input type="text" id="n" name="uname"  placeholder="Username">

	<span id="username"></span>

</div>
<div class="txtb">
	<span class="fa fa-lock"></span>
	<input type="password" id="p" name="upass"  placeholder="Password">
	<spam id="userpass">
</div>

<input type="submit" value="Login" class="btn btn-outline-success" name="submit"><br><br>
<div class="bottom-text">
    Don't have account ? <a href="signup.php">Sign up</a><br><br>
    <a href="admin/index.php"> Admin Login</a>
</div>

</center>
</form>
</div>
</body>
<div class="foot">
<?php
include('includes/footer.php');
?>
</html>