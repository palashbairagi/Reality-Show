<?php
session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}

session_unset();
session_destroy();
header('location: index.php');
?>