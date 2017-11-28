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
				<li class="selected">
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
			<h2>Applications</h2>
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content" style="width:910px;">
	<h2>Applications</h2>
			<ul>
<?php
$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select * from contestant where status!='selected' and status!='rejected'");
    if (mysqli_num_rows($rs) > 0) {
		while ($row = mysqli_fetch_array($rs)) 
		{
			?>
			<li>
			<b>
			<table>
			<tr>
			<td width='400'><a><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></a>
			<td width='100'><a href="viewDetails.php?id='<?php echo $row['id']?>'"><img src="images/details.png" alt="View Details" title="Details"/></a>
			<td width='100'><a href="viewVideo.php?id=<?php echo $row['id']?>"><img src="images/video.png" alt="View Video" title="Video"/></a>
			<td width='100'><a href="selectContestant.php?id=<?php echo $row['id']?>"><img src="images/select.png" alt="Select" title="Select"/></a>
			<td width='100'><a href="rejectContestant.php?id=<?php echo $row['id']?>"><img src="images/x.png" alt="Reject" title="Reject"/></a>
			</tr>
			</table>
			</b>
			</li>
			<?php
        }
    } 
?>
			</ul>
			
			</div>
				</div>

				<div id="footer">
		<p>
			Major Project By MITM Final Year Students
		</p>
	</div>
</body>
</html>