<?php
//For database connection

$con=mysqli_connect("localhost","root","","hackbasic");

$msg="";
//for form submit
if(!$con)
{

    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$fname1=mysqli_real_escape_string($con,$_POST['fname1']);
	$roll1=mysqli_real_escape_string($con,$_POST['roll1']);
	$subject1=mysqli_real_escape_string($con,$_POST['sunject1']);

	//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `feed_details`(fname1,roll1,subject1) VALUES
	('$fname1','$roll1','$subject1')");
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
