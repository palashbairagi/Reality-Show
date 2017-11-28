<!DOCTYPE HTML>
<?php
session_start();

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
	<script type="text/javascript" src="validation.js">
</script>
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
<form action="addUser.php" method="post" name="userForm" onSubmit="return validateUserForm(this);">
<table class="style1">
<caption>
<h3>New User</h3>
</caption>
<tr>
<td>
Username
</td>
<td>
<input name="userName" type="text" size="40" maxlength="50" placeholder="Username" class="style1">
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input name="password" type="password" size="40" maxlength="50" placeholder="Password" class="style1">
</td>
</tr>
<td>
Confirm</td>
<td>
<input name="confirmPassword" type="password" size="40" maxlength="50" placeholder="Confirm Password" class="style1">
</td>
</tr>
<tr>
<td>
<input name="submit" type="submit" value="Add" class="style1">
</td>
<td>
<input name="reset" type="reset" value="Clear" class="style1">
</td>
</tr>
</table>
</form>
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