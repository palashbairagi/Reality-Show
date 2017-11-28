<?php
$username=$_POST["userName"];
$password=$_POST["password"];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select * from user where username='$username' and password='$password'");

    if (mysqli_num_rows($rs) > 0) {
	while ($row = mysqli_fetch_array($rs)) 
		{
				$id=$row["id"];
				session_start();
				$_SESSION["id"]=$id;
				header('location: home.php');
		}
}else
{
				session_start();
				$_SESSION["message"]="Invalid Username Or Password";			
				header('location: message.php');
}
?>