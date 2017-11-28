<?php

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");
$rs = mysqli_query($con,"select max(id) as id from contestant");

$id;
 while ($row = mysqli_fetch_array($rs)) 
		{
		 $id=$row['id']+1;
        }

$file_src="videos/$id.mp4";
move_uploaded_file($_FILES["video"]["tmp_name"],$file_src);


$firstName=$_POST["firstName"];
$middleName=$_POST["middleName"];
$lastName=$_POST["lastName"];
$fathersName=$_POST["fathersName"];
$mothersName=$_POST["mothersName"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$emailId=$_POST["emailId"];

$house1=$_POST["house1"];
$street1=$_POST["street1"];
$city1=$_POST["city1"];
$pin1=$_POST["pin1"];
$state1=$_POST["state1"];
$phone1=$_POST["phone1"];
$mobile1=$_POST["mobile1"];

$house2=$_POST["house2"];
$street2=$_POST["street2"];
$city2=$_POST["city2"];
$pin2=$_POST["pin2"];
$state2=$_POST["state2"];
$phone2=$_POST["phone2"];
$mobile2=$_POST["mobile2"];

$description=$_POST["description"];

$con=mysqli_connect("localhost","root","root","audition") or die("Connection Failed");

    mysqli_query($con,"insert into contestant(first_name,middle_name,last_name,fathers_name,mothers_name,gender,dob,email_id,house1,street1,city1,pin1,state1,phone1,mobile1,house2,street2,city2,pin2,state2,phone2,mobile2,description)values('$firstName','$middleName','$lastName','$fathersName','$mothersName','$gender','$dob','$emailId','$house1','$street1','$city1','$pin1','$state1','$phone1','$mobile1','$house2','$street2','$city2','$pin2','$state2','$phone2','$mobile2','$description')");

				session_start();
				$_SESSION["message"]="Your Application is Successfully Submitted";
				
				header('location: message.php');
?>