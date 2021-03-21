<?php
$mob=$_POST['uname'];
$password=$_POST['upass'];

include ('includes/connection.php');

$sql="select * from login where uname='$mob'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	if($password==$row['1'])
	{
		header('location:index.php');
	}
}
else{
	echo "<script>alert('User not registered with us');</script>";
	header('location:login.php');
}

?>