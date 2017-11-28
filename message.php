<!DOCTYPE HTML>
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
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="addContestantPage.php">Audition Form</a>
				</li>
								<li>
					<a href="selection.php">Selections</a>
				</li>
				<li>
					<a href="adminLoginPage.php">Admin Login</a>
				</li>			
			</ul>
		</div>
		<div class="body">
			<a  class="logo"><h1>Welcome To</h1><h2>Reality Show </h2></a>
			<p>
				Now Apply Online. Upload your video and increase your chance to get selected.
			</p>
			<a class="download" href="addContestantPage.php">Apply Here For Audition</a>
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content">
<h1>
<?php

session_start();

if((isset($_SESSION['message']) && $_SESSION['message']!=''))
{
	$message=$_SESSION['message'];
	echo $message;
	session_unset();
	session_destroy();
}else
{
	echo "Something Went Wrong";
}
	?>			
</h1>
			</div>
		<div class="sidebar">
			<div>
				<h3>Audition</h3>
				<ul>
					<li>
						<a>July 19, 2015&nbsp;&nbsp;-&nbsp;&nbsp;<b>Delhi, India</b></a>
					</li>
					<li>
						<a>July 20, 2015&nbsp;&nbsp;-&nbsp;&nbsp;<b>Mumbai, India</b></a>
					</li>
					<li>
						<a>July 21, 2023&nbsp;&nbsp;-&nbsp;&nbsp;<b>Chennai, India</b></a>
					</li>
					<li>
						<a>July 22, 2023&nbsp;&nbsp;-&nbsp;&nbsp;<b>Kolkata, India</b></a>
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