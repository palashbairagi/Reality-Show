<?php

session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}

$id=$_GET['id'];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");

    $q = "delete from contestant where id=".$id;
    mysqli_query($con,$q);

		header('location: rejected.php');
?>