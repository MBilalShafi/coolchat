<?php


include ("connection.php");


if(isset($_POST['signup']))
	{
	$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpass= $_POST['cpassword'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
	
		$check_email = mysql_query("SELECT email FROM users Where email = '$email' ");
		
		if($fname == "" || $email == "" || $password == "" || $dob == "" ||$gender == "" )
		{
			echo "Please fill all required fields";
		}
		else if(mysql_num_rows($check_email) > 0)
		{
			
			header("location:index.html?msg=invalid email!"); 
		}
		else{
		$query = "INSERT INTO users 
		VALUES ('$fname', '$lname', '$email', '$password', '$dob', '$gender')";
		mysql_query($query); 

		include("retrieve.php");
	//header("location:retrieve.php?"); 
}
		
		
	}














?>