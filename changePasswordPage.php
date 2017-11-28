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
				<li>
					<a href="viewUser.php">User</a>
				</li>
				<li  class="selected">
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
			<h2>
			<?php if(isset($_SESSION['changePassword']))
	{
	$message=$_SESSION['changePassword'];
	echo $message;
	unset($_SESSION["changePassword"]);
	}?>
		</h2>
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content">
<form action="changePassword.php" name="changePasswordForm" onSubmit="return validateChangePasswordForm(this);" >
<table class="style1">
<caption>
<h1>
Change Password
</h1>
</caption>
<tr>
<td>New Password
</td>
<td><input name="password" type="password" size="50" maxlength="50" class="style1" placeholder="Password"/>
</td>
</tr>
<tr>
<td>Confirm Password
</td>
<td><input name="confirmPassword" type="password" size="50" maxlength="50" class="style1" placeholder="Confirm Password"/>
</td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Change Password" class="style1"/>
</td>
<td>
<input name="reset" type="reset" value="Clear" class="style1"/>
</td>
</tr>
</table>
</form>
				</div>
	</div>
	<div id="footer">
		<p>
			Major Project By MITM Final Year Students
		</p>
	</div>
</body>
</html>