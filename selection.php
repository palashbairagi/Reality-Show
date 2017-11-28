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
				<li  class="selected">
					<a href="selection.php">Selections</a>
				</li>
				<li>
					<a href="adminLoginPage.php">Admin Login</a>
				</li>			
			</ul>
		</div>
		<div class="body">
			<a  class="logo"><h2>Congratulations</h2></a>
			<p>
				If you find your name in the list. You may come to any of the audition in Delhi, Mumbai, Kolkata or Chennai.
			</p>
		</div>
		<div class="footer">			
		</div>
	</div>
	<div id="body">
		<div class="content" style="width:910px;">
	<h2>Selections</h2>
			<ul>
				
				<?php

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select * from contestant where status='selected'");
    if (mysqli_num_rows($rs) > 0) {
		
        while ($row = mysqli_fetch_array($rs)) 
		{
			?>
			<li>
			<b>
		    <a><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></a>
			</b>
			</li>
			<?php
        }
    } 
?>

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