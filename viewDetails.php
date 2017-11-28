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
			<h2>Details</h2>
			</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content">
			
<?php
$id=$_GET["id"];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select * from contestant where id=".$id);
    if (mysqli_num_rows($rs) > 0) {
		
        while ($row = mysqli_fetch_array($rs)) 
		{
			?>
			<table>
			<tr>
			<td width='200'>Name</td>
		    <td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]; ?></td>
			</tr>
			<tr>
			<td>Father's Name</td>
			<td><?php echo $row["fathers_name"];?></td>
			</tr>
			<tr>
			<td>Mother's Name</td>
			<td><?php echo $row["mothers_name"];?></td>
			</tr>
			<tr>
			<td>Gender</td>
			<td><?php echo $row["gender"]; ?></td>
			</tr>
			<tr>
			<td>DOB</td>
			<td><?php echo $row["dob"];?></td>
			</tr>
			<tr>
			<td>Email Id</td>
			<td><?php echo $row["email_id"];?></td>
			</tr>
			<tr>
			<td>Local Address</td>
			<td><?php echo $row["house1"].", ".$row["street1"].", ".$row["city1"]." - ".$row["pin1"].", ".$row["state1"];?></td>
			</tr>
			<tr>
			<td>Local Contact No</td>
			<td><?php echo $row["phone1"].", ".$row["mobile1"];?></td>
			</tr>
			<tr>
			<td>Permanent Address</td>
			<td><?php echo $row["house2"].", ".$row["street2"].", ".$row["city2"]." - ".$row["pin2"].", ".$row["state2"];?></td>
			</tr>
			<tr>
			<td>Permanent Contact No</td>
			<td><?php echo $row["phone2"].", ".$row["mobile2"];?></td>
			</tr>
			<tr>
			<td>Description</td>
			<td><?php echo $row["description"];?></td>
			</tr>
			<tr>
			<td>Status</td>
			<td><?php echo $row["status"];?></td>
			</tr>
			<tr>
			<td>
			View Video
			</td>
			<td>
			<a href="viewVideo.php?id=<?php echo $row['id']?>"><img src="images/video.png" alt="View Video" title="Video"/></a>
			</td>
			</tr>
			</table>
			<?php
        }
    } 
?>

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