<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$email=$_POST['email'];
    $nic=$_POST['nic'];
	$mobile=$_POST['mobile'];
    $username=$_POST['username'];
	$password=$_POST['password'];
	

	$con=mysqli_connect("localhost","root","","library_db");
	//mysqli_select_db(f_db);
	$firstname=stripcslashes($firstname);
	$lastname=stripcslashes($lastname);
	$address=stripcslashes($address);
    $email=stripcslashes($email);
	$nic=stripcslashes($nic);
	$mobile=stripcslashes($mobile);
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	
	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	$address=mysqli_real_escape_string($con,$address);
    $email=mysqli_real_escape_string($con,$email);
	$nic=mysqli_real_escape_string($con,$nic);
	$mobile=mysqli_real_escape_string($con,$mobile);
	$username=mysqli_real_escape_string($con,$username);
	$pasword=mysqli_real_escape_string($con,$password);
	
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	
            

	$sql="INSERT INTO `member` (`firstname`, `lastname`,`address`,`email`,`nic`,`mobile`,`username`,`password`)
     VALUES ('$firstname','$lastname','$address','$email','$nic', '$mobile', '$username','$password'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
        include 'login.php';
	

?>