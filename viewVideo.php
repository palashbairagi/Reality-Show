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
				<li>
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
			<h2>Video</h2>
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content">

<?php

$id=$_GET["id"];

?>

			<a href="#"><video id="video1" width="520" height="280" style="border:5px solid #240e36;" controls>
			<source src='videos/<?php echo $id?>.mp4' type="video/mp4">
			</video>
			</a>
			</div>
		
		<div class="sidebar">
			<div>
				<h3>Contestant</h3>
				<ul>
					<li>
						<a href="viewContestant.php"><b>All Contestants</b></a>
					</li>
					<li>
						<a href="selected.php"><b>Selected Contestants</b></a>
					</li>
					<li>
						<a href="rejected.php"><b>Rejected Contestants</b></a>
					</li>
					<li>
						<a href="home.php"><b>Applications</b></a>
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