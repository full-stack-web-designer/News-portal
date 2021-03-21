<?php
$fname=$_POST['fname'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$password=$_POST['pass'];
include('includes/connection.php');

echo "<br>".$fname."<br>";
echo $mob."<br>";
echo $email."<br>";
echo $password."<br>";

$sql="insert into signup(fname,mob,email,pass) VALUES ('$fname','$mob','$email','$password')";

if(mysqli_query($con,$sql))
{
echo "<br> record inserted";
header('location:login.php');
}
else
{
echo "not inserted";
header('location:signup.php');
}
$sql="insert into login(uname,upass) VALUES ('$mob','$password')";

if(mysqli_query($con,$sql))
echo "<br> record inserted";
else
echo "not inserted";
?>