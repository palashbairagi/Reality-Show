<!DOCTYPE HTML>
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
				<li class="selected">
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
			
		</div>
		<div class="footer">
			
		</div>
	</div>
	<div id="body">
		<div class="content" style="width:950px;">
<form action="addContestant.php" method="post" name="contestantForm" onsubmit="return validateContestantForm(this);" enctype="multipart/form-data">
<table class="style1" >
<caption>
<h1>Audition Application </h1>
</caption>
<tr>
<td width="181">
<label>First Name</label><font color="#FF0000">*</font>
</td>
<td width="395">
<input name="firstName" type="text" size="20" maxlength="20" placeholder="First Name" class="style1" />
</td>
</tr>
<tr>
<td>
<label>Middle Name</label>
</td>
<td>
<input name="middleName" type="text" size="20" maxlength="20" placeholder="Middle Name" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Last Name</label><font color="#FF0000">*</font>
</td>
<td>
<input name="lastName" type="text" size="20" maxlength="20" placeholder="Last Name" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Father's Name</label><font color="#FF0000">*</font>
</td>
<td>
Mr.<input name="fathersName" type="text" size="40" maxlength="40" placeholder="Father's Name" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Mother's Name</label><font color="#FF0000">*</font>
</td>
<td>
Mrs.<input name="mothersName" type="text" size="40" maxlength="40" placeholder="Mother's Name" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Gender</label><font color="#FF0000">*</font>
</td>
<td>
<input name="gender" type="radio" value="Male" checked />Male &nbsp;&nbsp;&nbsp;&nbsp;
<input name="gender" type="radio" value="Female"/>Female
</td>
</tr>
<tr>
<td>
<label>DOB</label><font color="#FF0000">*</font>
</td>
<td>
<input name="dob" type="date" size="20" maxlength="20" placeholder="dd/mm/yyyy" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Email Id</label><font color="#FF0000">*</font>
</td>
<td>
<input name="emailId" type="email" size="50" maxlength="50" placeholder="abc@example.com" class="style1"/>
</td>
</tr>
<tr>
<td colspan="2">
<h3>Local Address</h3>
</td>
</tr>
<tr>
<td>
<label>House</label><font color="#FF0000">*</font>
</td>
<td>
<input name="house1" id="house1" type="text" size="10" maxlength="10" placeholder="House Number" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Street</label><font color="#FF0000">*</font>
</td>
<td>
<input name="street1" id="street1" type="text" size="50" maxlength="50" placeholder="Street" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>City</label><font color="#FF0000">*</font>
</td>
<td>
<input name="city1" id="city1" type="text" size="15" maxlength="15" placeholder="City" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Pin</label><font color="#FF0000">*</font>
</td>
<td>
<input name="pin1" id="pin1" type="number" size="6" max="999999" min="100000" placeholder="Pin" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>State</label><font color="#FF0000">*</font>
</td>
<td>
<input name="state1" id="state1" type="text" size="25" maxlength="25" placeholder="State" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Phone Number</label><font color="#FF0000">*</font>
</td>
<td>
<input name="phone1" id="phone1" type="text" size="20" maxlength="20" placeholder="Phone Number" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Mobile Number</label><font color="#FF0000">*</font>
</td>
<td>
<input name="mobile1" id="mobile1" type="text" size="20" maxlength="20" placeholder="Mobile Number" class="style1"/>
</td>
</tr>
<tr> 
<td >
<h3>Permanent Address</h3>
</td>
<td>
<input type="button" name='button' value="Same as Local Address" onclick="copyAddress(this);" class="style1" />
</td>
</tr>
<tr>
<td>
<label>House</label><font color="#FF0000">*</font>
</td>
<td>
<input name="house2" id="house2" type="text" size="10" maxlength="10" placeholder="House Number" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Street</label><font color="#FF0000">*</font>
</td>
<td>
<input name="street2" id="street2" type="text" size="50" maxlength="50" placeholder="Street" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>City</label><font color="#FF0000">*</font>
</td>
<td>
<input name="city2" id="city2" type="text" size="15" maxlength="15" placeholder="City" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Pin</label><font color="#FF0000">*</font>
</td>
<td>
<input name="pin2" id="pin2" type="number" size="6" max="999999" min="100000" placeholder="Pin" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>State</label><font color="#FF0000">*</font>
</td>
<td>
<input name="state2" id="state2" type="text" size="50" maxlength="50" placeholder="State" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Phone Number</label><font color="#FF0000">*</font>
</td>
<td>
<input name="phone2" id="phone2" type="text" size="20" maxlength="20" placeholder="Phone Number" class="style1"/>
</td>
</tr>
<tr>
<td>
<label>Mobile Number</label><font color="#FF0000">*</font>
</td>
<td>
<input name="mobile2" id="mobile2" type="text" size="20" maxlength="20" placeholder="Mobile Number" class="style1"/>
</td>
</tr>
<tr>
<td>
Description
</td>
<td>
<textarea name="description" cols="30" rows="10" placeholder="Description" class="style1"></textarea>Max. 250 characters
</td>
</tr>
<tr>
<td>
Upload Video
</td>
<td>
<input name="video" id="video" type="file" class="style1"/>
</td>
</tr>
<tr>
<td>
<input name="submit" type="submit" value="Submit" class="style1"/>
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