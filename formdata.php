<?php
//For database connection

$con=mysqli_connect("localhost","root","","dbbasic");

$msg="";
//for form submit
if(!$con)
{

    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$sname=mysqli_real_escape_string($con,$_POST['sname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phoneNumber=mysqli_real_escape_string($con,$_POST['phoneNumber']);
	
	//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `student_details`(sname,email,phoneNumber) VALUES 
	('$sname','$email','$phoneNumber')");
	if(mysqli_affected_rows($con)>0){
		//status message
		?><script>alert("record added sucessfully");
      
    
    </script><?php
	}
	else{
		$msg="<div class='alert alert-danger'>record not added Successfully</div>";
	}
    mysqli_close($con)   ;
}
?>

		





