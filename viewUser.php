<!DOCTYPE HTML>
<?php	session_start();

if(!(isset($_SESSION['id'])))
{
	$_SESSION["message"]="Please Login to Continue....";
	header("location: message.php");
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reality Show</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="header">
			<ul>
				<li>
					<a href="home.php">Applications</a>
				</li>
				<li>
					<a href="viewContestant.php">Contestant</a>
				</li>
				<li class="selected">
					<a href="viewUser.php">User</a>
				</li>
				<li>
					<a href="changePasswordPage.php">Change&nbsp;Password</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>						
				<li>
					<a href="deleteUser.php">Delete&nbsp;Account</a>
				</li>				
			</ul>
		</div>
		<div class="body">
			<h2>User</h2>
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content">
<h2>Users</h2>
			<ul>
<?php

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select username from user");
    if (mysqli_num_rows($rs) > 0) {
		
        while ($row = mysqli_fetch_array($rs)) 
		{
			?>
			<li>
			<b>
		    <a><?php echo $row['username']?></a>
			</b>
			</li>
			<?php
        }
    } 
?>
			</ul>
		</div>
		<div class="sidebar">
			<div>
				<h3>User</h3>
				<ul>
					<li>
						<a href="addUserPage.php"><b>Add User</b></a>
					</li>
					<li>
						<a href="viewUser.php"><b>View User</b></a>
					</li>
				</ul>
			</div>
				</div>
	</div>
	<div id="footer">
		<p>
			Major Project By MITM Final Year Students
		</p>
	</div>
</body>
</html>