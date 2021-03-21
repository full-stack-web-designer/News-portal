<html>
<head>
<title>News Portal | Signup Page</title>
 	<link rel="stylesheet" href="css/animate.css">

 	<script type="text/javascript">
 		function validation() {
		var uname=document.getElementById('n').value;
		var mob=document.getElementById('m').value;
		var email=document.getElementById('e').value;
		var pass=document.getElementById('p').value;
		var cpass=document.getElementById('cp').value;
		
		if (uname=="" | uname==null) {
			document.getElementById('fullname').innerHTML="**Can not be empty";
			return false; 
		}
		if(mob=="" | mob==null) {
			document.getElementById('mob').innerHTML="**Can not be empty";
			return false; 
		}
		if (email=="" | email==null) {
			document.getElementById('email').innerHTML="**Can not be empty";
			return false; 
		}
		if (pass=="" | pass==null) {
			document.getElementById('pass').innerHTML="**Can not be empty";
			return false; 
		}
		if (cpass=="" | cpass==null) {
			document.getElementById('cpass').innerHTML="**Can not be empty";
			return false; 
		}
		if (pass != cpass) {
			document.getElementById('cpass').innerHTML="**Password does not match";
			return false; 
		}
		alert('Success');
	}
 	</script>
	
 <style>

body{
	min-height:200vh;
	background-image: linear-gradient(120deg,#3498db,#8e44ad);
}
.login-form{
	width: 500px;
	background:#f1f1f1;
	height: 700px;
	margin: 60px 50px 30px 350px;
	font-family:montserrat;
	padding: 80px 40px;
	border-radius:10px;
	
}

.txtb{
	
	margin: 20px 0;
	border-bottom: 2px solid #adadad;
}
.txtb i{
	width:10px;
	float: left;
	text-align:center;

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
.foot{
	position:absolute;top:1100px;
	width:100%;
}
</style>
</head>
<body>

<div>
	<?php
	include 'includes/head.php';
	?>
</div>
	<div class="container">
		<form method="POST" action="db-registration.php" class="login-form" onsubmit="return validation()">
			<center>
			<font size="6">Sign up</font>
<div class="txtb">
<input type="text"  name="fname"  placeholder="Full Name" id="n"><br><br>
<span id="fullname"></span>
</div>
<div class="txtb">
	<input type="text" name="mob" placeholder="Mobile No." id="m"><br><br>
	<span id="mob"></span>
</div>
<div class="txtb">
<input type="text" name="email"  placeholder="Email" id="e"><br><br>
<span id="email"></span>
</div>
<div class="txtb">
<input type="Password" name="pass"  placeholder="Password" id="p"><br><br>
<span id="pass"></span>
</div>
<div class="txtb">
<input type="Password" name="pass"  placeholder="Confirm Password" id="cp"><br><br>
<span id="cpass"></span>
</div>
<input type="submit" value="submit" class="btn btn-outline-success">
</form>
</center>
</div>
</body>
<div class="foot">
<?php
include('includes/footer.php');
?>
</html>