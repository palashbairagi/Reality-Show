<?php
session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}

$id=$_SESSION['id'];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");

    $q = "delete from user where id=".$id;
    mysqli_query($con,$q);

	session_start();
	session_unset();
	session_destroy();
	$_SESSION["message"]="Your Account is Successfully Deleted";						
	header('location: message.php');
?>