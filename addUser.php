<?php
	session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}

$userName=$_POST["userName"];
$password=$_POST["password"];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");

    mysqli_query($con,"insert into user (username,password) values ('$userName','$password')");
	
				
				$_SESSION["message"]="User Added";
				header('location: viewUser.php');
?>