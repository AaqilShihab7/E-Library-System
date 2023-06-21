<?php

	$username=$_POST['username'];
	$password=$_POST['password'];

	$con=mysqli_connect("localhost","root","","library_db");
	//mysqli_select_db(f_db);
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);



	 

	$result=mysqli_query($con,"select * from member where username='$username' and password='$password'") 
						or die("Failed to query database".mysqli_error());

	$row= mysqli_fetch_array($result);


	if(empty($username)){
		header("location:login.php?error Username is required");
		exit();

	}
	elseif (empty($password)) {
		header("location:login.php?error password is required");
		exit();
	}
	else{

	if($row['username']==$username && $row['password']==$password){

		echo "Login Success!!! Welcome"," ".$row['username'];
		//include "view.php";
		include 'membook.php'; 
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}
//


?>