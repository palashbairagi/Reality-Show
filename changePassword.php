<?php
	session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}

$id=$_SESSION['id'];
$password=$_GET['password'];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");

    $q = "update user set password=".$password." where id=".$id;
    mysqli_query($con,$q);
	
	$_SESSION["changePassword"]="Password Successfully Changed";
	
	header('location: changePasswordPage.php');
?>