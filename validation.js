function validateAdminLoginForm(form)
{
	var userName=form.userName.value;
	var password=form.password.value;
	
	if(userName.length==0)
	{
	alert('Enter Username');
	form.userName.focus();
	return false;
	}

var v='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

var e=0;
while(e<userName.length)
	{
	if(v.indexOf(userName.charAt(e))==-1)
	{
	alert('Invalid Username');
	form.userName.focus();
	return false;
	}
	e++;
	}


if(password.length==0)
{
alert('Enter Password');
form.password.focus();
return false;
}

return true;
}

function validateContestantForm(form)
{	 
	var firstName=form.firstName.value;
	var middleName=form.middleName.value;
	var lastName=form.lastName.value;
	var fathersName=form.fathersName.value;
	var mothersName=form.mothersName.value;
	var dob=form.dob.value;
	var emailId=form.emailId.value;
	
	var house1=form.house1.value;
	var street1=form.street1.value;
	var city1=form.city1.value;
	var pin1=form.pin1.value;
	var state1=form.state1.value;
	var phone1=form.phone1.value;
	var mobile1=form.mobile1.value;
	
	var house2=form.house2.value;
	var street2=form.street2.value;
	var city2=form.city2.value;
	var pin2=form.pin2.value;
	var state2=form.state2.value;
	var phone2=form.phone2.value;
	var mobile2=form.mobile2.value;
	
	
	if(firstName.length==0)
	{
		alert('Please Enter First Name');
		form.firstName.focus();
		return false;		
	}
	
	var v='qwertyuiopasdfghjklzxcvbnm QWERTYUIOPASDFGHJKLZXCVBNM';
	
	var e=0;
	while(e<firstName.length)
		{
		if(v.indexOf(firstName.charAt(e))==-1)
		{
		alert('Invalid First Name');
		form.firstName.focus();
		return false;
		}
		e++;
		}
	
	e=0;
	while(e<middleName.length)
		{
		if(v.indexOf(middleName.charAt(e))==-1)
		{
		alert('Invalid Middle Name');
		form.middleName.focus();
		return false;
		}
		e++;
		}
	
	
	if(lastName.length==0)
	{
		alert('Please Enter Last Name');
		form.lastName.focus();
		return false;
	}
	
	e=0;
	while(e<lastName.length)
		{
		if(v.indexOf(lastName.charAt(e))==-1)
		{
		alert('Invalid Last Name');
		form.lastName.focus();
		return false;
		}
		e++;
		}
	
	if(fathersName.length==0)
	{
		alert("Please Enter Father's Name");
		form.fathersName.focus();
		return false;
	}
	
	e=0;
	while(e<fathersName.length)
		{
		if(v.indexOf(fathersName.charAt(e))==-1)
		{
		alert("Invalid Father's Name");
		form.fathersName.focus();
		return false;
		}
		e++;
		}
	
	if(mothersName.length==0)
	{
		alert("Please Enter Mother's Name");
		form.mothersName.focus();
		return false;
	}
	
	e=0;
	while(e<mothersName.length)
		{
		if(v.indexOf(mothersName.charAt(e))==-1)
		{
		alert("Invalid Mother's Name");
		form.mothersName.focus();
		return false;
		}
		e++;
		}
	
	
	if(dob.length==0)
	{
		alert('Please Enter Date Of Birth');
		form.dob.focus();
		return false;
	}
	
	if(emailId.length==0)
	{
		alert('Please Enter Email Id');
		form.emailId.focus();
		return false;
	}
	
	if(house1.length==0)
	{
		alert('Please Enter Local House Number');
		form.house1.focus();
		return false;
	}
	
	if(street1.length==0)
	{
		alert('Please Enter Local Street');
		form.street1.focus();
		return false;
	}
	
	if(city1.length==0)
	{
		alert('Please Enter Local City');
		form.city1.focus();
		return false;
	}
	
	e=0;
	while(e<city1.length)
		{
		if(v.indexOf(city1.charAt(e))==-1)
		{
		alert('Invalid Local City');
		form.city1.focus();
		return false;
		}
		e++;
		}
	
	
	if(pin1.length==0)
	{
		alert('Please Enter Local Pin');
		form.pin1.focus();
		return false;
	}
	
	if(state1.length==0)
	{
		alert('Please Enter Local State');
		form.state1.focus();
		return false;
	}
	
	e=0;
	while(e<state1.length)
		{
		if(v.indexOf(state1.charAt(e))==-1)
		{
		alert('Invalid Local State');
		form.state1.focus();
		return false;
		}
		e++;
		}
	
	
	if(phone1.length==0)
	{
		alert('Please Enter Local Phone Number');
		form.phone1.focus();
		return false;
	}
	
	var n='1234567890';

		e=0;
		while(e<phone1.length)
			{
			if(n.indexOf(phone1.charAt(e))==-1)
			{
			alert('Please Enter Digits Only');
			form.phone1.focus();
			return false;
			}
			e++;
			}
		
	
	if(phone1.length>15 || phone1.length<7 )
	{
	alert('Enter Valid Phone Number');
	form.phone1.focus();
	return false;
	}
	
	if(mobile1.length==0)
	{
		alert('Please Enter Local Mobile Number');
		form.mobile1.focus();
		return false;
	}
	
	e=0;
		while(e<mobile1.length)
			{
			if(n.indexOf(mobile1.charAt(e))==-1)
			{
			alert('Please Enter Digits Only');
			form.mobile1.focus();
			return false;
			}
			e++;
			}
		
	
	if(mobile1.length!=10 )
	{
	alert('Enter Valid Mobile Number');
	form.mobile1.focus();
	return false;
	}
	
	if(house2.length==0)
	{
		alert('Please Enter Permanent House Number');
		form.house2.focus();
		return false;
	}
	
	if(street2.length==0)
	{
		alert('Please Enter Permanent Street');
		form.street2.focus();
		return false;
	}
	
	if(city2.length==0)
	{
		alert('Please Enter Permanent City');
		form.city2.focus();
		return false;
	}
	
	
	e=0;
	while(e<city2.length)
		{
		if(v.indexOf(city2.charAt(e))==-1)
		{
		alert('Invalid Permanent City');
		form.city2.focus();
		return false;
		}
		e++;
		}
		
	if(pin2.length==0)
	{
		alert('Please Enter Permanent Pin');
		form.pin2.focus();
		return false;
	}
	
	if(state2.length==0)
	{
		alert('Please Enter Permanent State');
		form.state2.focus();
		return false;
	}
	
	
	e=0;
	while(e<state2.length)
		{
		if(v.indexOf(state2.charAt(e))==-1)
		{
		alert('Invalid Local State');
		form.state2.focus();
		return false;
		}
		e++;
		}
	
	if(phone2.length==0)
	{
		alert('Please Enter Permanent Phone Number');
		form.phone2.focus();
		return false;
	}
	
		e=0;
		while(e<phone2.length)
			{
			if(n.indexOf(phone2.charAt(e))==-1)
			{
			alert('Please Enter Digits Only');
			form.phone2.focus();
			return false;
			}
			e++;
			}
		
	
	if(phone2.length>15 || phone2.length<7 )
	{
	alert('Enter Valid Phone Number');
	form.phone2.focus();
	return false;
	}
	
	if(mobile2.length==0)
	{
		alert('Please Enter Permanent Mobile Number');
		form.mobile2.focus();
		return false;
	}
	
	
	e=0;
		while(e<mobile2.length)
			{
			if(n.indexOf(mobile2.charAt(e))==-1)
			{
			alert('Please Enter Digits Only');
			form.mobile2.focus();
			return false;
			}
			e++;
			}
		
	
	if(mobile2.length!=10 )
	{
	alert('Enter Valid Mobile Number');
	form.mobile2.focus();
	return false;
	}
	
	var vdo=document.getElementById("video").value;
	
	if(vdo.length==0)
	{
	alert('Please Attach a Video');
	form.video.focus();
	return false;
	}

	var ext=vdo.substring(vdo.lastIndexOf('.')+1);
	
	if(ext=="mp4" || ext=="MP4")
	{
		
	}
	else
	{
		alert("Upload video in MP4 Format only");
		form.video.focus();
		return false;
	}
		
	try{
	var thefile=document.getElementById("video").files[0];
	var size=thefile.size;
	if(size>=3000000)
	{
		alert("Please Upload Video upto 3MB");
		form.video.focus();
		return false;
	}
	}catch(e)
	{
		alert("Unable to Upload Video "+e);
		return false;
	}	

	return true;
}

function getSize()
{
	}

function copyAddress(form)
{
	document.getElementById("house2").value=document.getElementById("house1").value;	
	document.getElementById("street2").value=document.getElementById("street1").value;	
	document.getElementById("city2").value=document.getElementById("city1").value;	
	document.getElementById("pin2").value=document.getElementById("pin1").value;	
	document.getElementById("state2").value=document.getElementById("state1").value;	
	document.getElementById("phone2").value=document.getElementById("phone1").value;	
	document.getElementById("mobile2").value=document.getElementById("mobile1").value;	
}

function validateUserForm(form)
{
		var userName=form.userName.value;
		var password=form.password.value;
		var confirmPassword=form.confirmPassword.value;
		
		if(userName.length==0)
			{
			alert('Enter Username');
			form.userName.focus();
			return false;
			}
		
		var v='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		
		var e=0;
		while(e<userName.length)
			{
			if(v.indexOf(userName.charAt(e))==-1)
			{
			alert('Invalid Username');
			form.userName.focus();
			return false;
			}
			e++;
			}

		
		if(password.length==0)
		{
		alert('Enter Pasword');
		form.password.focus();
		return false;
		}
	
	
	if(confirmPassword.length==0)
		{
		alert('Enter Confirm Pasword');
		form.confirmPassword.focus();
		return false;
		}
	
	if(password!=confirmPassword)
		{
			alert('Both passwords are different');
			form.password.focus();
			return false;	
		}

}

function validateChangePasswordForm(form)
{
	var password=form.password.value;
	var confirmPassword=form.confirmPassword.value;
	
	if(password.length==0)
	{
	alert('Enter Pasword');
	form.password.focus();
	return false;
	}


if(confirmPassword.length==0)
	{
	alert('Enter Confirm Pasword');
	form.confirmPassword.focus();
	return false;
	}

if(password!=confirmPassword)
	{
		alert('Both passwords are different');
		form.password.focus();
		return false;	
	}

}

function validateLoginForm(form)
{
	var userName=form.userName.value;
	var password=form.password.value;
	
	if(userName.length==0)
	{
	alert('Enter Username');
	form.userName.focus();
	return false;
	}

var v='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

var e=0;
while(e<userName.length)
	{
	if(v.indexOf(userName.charAt(e))==-1)
	{
	alert('Invalid Username');
	form.userName.focus();
	return false;
	}
	e++;
	}


if(password.length==0)
{
alert('Enter Password');
form.password.focus();
return false;
}

return true;
}

