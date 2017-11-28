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
					<a href="index.php">home</a>
				</li>
				<li >
					<a href="addContestantPage.php">Audition Form</a>
				</li>
								<li>
					<a href="selection.php">Selections</a>
				</li>
				<li class="selected">
					<a href="adminLoginPage.php">Admin Login</a>
				</li>			
			</ul>
		</div>
		<div class="body">
			<a  class="logo"><h1>Welcome To</h1><h2>Reality Show </h2></a>
			<p>
				Now Apply Online. Upload your video and increase your chance to get selected.
			</p>
			
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content" style="width:950px;">
<form action="adminLogin.php" method="post" name="adminLoginForm" onsubmit="return validateAdminLoginForm(this);">
<table class="style1">
<caption>
<h1>
Admin Login
</h1>
</caption>
<tr>
<td>Username
</td>
<td><input name="userName" type="text" size="50" maxlength="50" class="style1" placeholder="Username" class="style1"/>
</td>
</tr>
<tr>
<td>Password
</td>
<td><input name="password" type="password" size="50" maxlength="50" class="style1" placeholder="Password" class="style1"/>
</td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Login" class="style1"/>
</td>
<td><input name="reset" type="reset" value="Clear" class="style1"/>
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